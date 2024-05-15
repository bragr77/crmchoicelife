<?php

namespace App\Http\Controllers;

use App\Mail\RegistroMailable;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class RegistroFinalizadoController extends Controller
{
    public function finalizar($id)
    {

        $cliente = Cliente::find($id);

        $cliente->load('user');

        /* crear el pdf */

        $pdf = PDF::loadView('pdf.consentform' , [
            'cliente' => $cliente,
        ]);

        $nombrescliente = $cliente->nombres;
        $apellidoscliente = $cliente->apellidos;
        $emailagente = $cliente->user->email;

        $nombresagente = $cliente->user->name;
        $apellidosagente = $cliente->user->lastname;

        $fecharegistro = Carbon::now()->isoFormat('D [de] MMMM [de] Y');
        //$nombrearchivo = $nombres . '_' . $apellidos . '.pdf';
        $pdf->save(public_path('pdf/' . $nombrescliente.'_'.$apellidoscliente.'.pdf'));

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set('America/Guatemala');

        //$token = "6559184973:AAFzGZJ6Nl7YKjzSKx8iS5mmFI4qUjiuQjA"; // bot de welfer

        $token = "6611079081:AAFiHn5ZiIgF9hJB8gmP0mufPi-uAi_vK-Q"; // mi bot

$telegrammensaje = "Se produjo un registro de cliente

<b>Cliente:</b> $nombrescliente $apellidoscliente,
<b>fecha del registro:</b> $fecharegistro,
<b>Agente asignado:</b>: $nombresagente $apellidosagente";

        $datos = [
            //'chat_id' => '6547705807', // ID de Welfer
            'chat_id' => '1118397735', // Mi ID
            #'chat_id' => '@el_canal si va dirigido a un canal',
            'text' => "$telegrammensaje",
            'parse_mode' => 'HTML' #formato del mensaje
        ];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $r_array = json_decode(curl_exec($ch), true);

        /* Enviar email */

        $datosemail = [
            'nombres_cliente' => $nombrescliente,
            'apellidos_cliente' => $apellidoscliente,
            'nombres_agente' => $nombresagente,
            'apellidos_agente' => $apellidosagente,

        ];

        Mail::to($emailagente)->send(new RegistroMailable($datosemail));
        Mail::to($cliente->email)->send(new RegistroMailable($datosemail));

        return inertia('Registro/Finalizar',[
            'cliente'  => $cliente,
        ]);
    }
}
