<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Ficha del Cliente</title>
    </head>
    <body>
        <h4 class="text-center">Planilla del Cliente</h4>
        <div class="card row">
            <div class="card-header">
                <span>Datos Personales</span>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">Nombres:</span> {{ $cliente->nombres }}</td>
                            <td class="border-0"><span class="font-weight-bold">Apellidos:</span> {{ $cliente->apellidos }}</td>
                            <td class="border-0"><span class="font-weight-bold">Genero:</span> {{ $cliente->genero }}</td>
                        </tr>
                        <tr >
                            <td colspan="2" class="border-0"><span class="font-weight-bold">Fecha de Nac.:</span> {{ \Carbon\Carbon::parse($cliente->fechan)->isoFormat('D [de] MMMM [de] Y') }}</td>
                            <td class="border-0"><span class="font-weight-bold">Estatus:</span> {{ $cliente->estatus }}</td>
                        </tr>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">SSN:</span> {{ $cliente->ssn }}</td>
                            <td colspan="2" class="border-0"><span class="font-weight-bold">Dirección:</span> {{ $cliente->direccion }}</td>
                        </tr>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">Ciudad:</span> {{ $cliente->ciudad }}</td>
                            <td class="border-0"><span class="font-weight-bold">Condado:</span> {{ $cliente->condado }}</td>
                            <td class="border-0"><span class="font-weight-bold">Estado:</span> {{ $cliente->estado }}</td>
                        </tr>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">Código Postal:</span> {{ $cliente->postal }}</td>
                            <td class="border-0"><span class="font-weight-bold">Teléfono:</span> {{ $cliente->telefono }}</td>
                            <td class="border-0"><span class="font-weight-bold">Email:</span> {{ $cliente->email }}</td>
                        </tr>
                        {{-- <tr >
                            <td colspan="2" class="border-0"><span class="font-weight-bold">Agente que lo atendio:</span> {{ $cliente->user->name }} {{ $cliente->user->lastname }}</td>
                            <td class="border-0"><span class="font-weight-bold">Estado Civil:</span> {{ $cliente->estadocivil }}</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
        @if ($cliente->estadocivil === 'casado')
            <div class="card row mt-2">
                <div class="card-header">
                    <span>Datos del Conyugue</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr >
                                <td class="border-0"><span class="font-weight-bold">Nombres:</span> {{ $cliente->conyugue->nombres }}</td>
                                <td class="border-0"><span class="font-weight-bold">Apellidos:</span> {{ $cliente->conyugue->apellidos }}</td>
                                <td class="border-0"><span class="font-weight-bold">Genero:</span> {{ $cliente->conyugue->genero }}</td>
                            </tr>
                            <tr >
                                <td colspan="2" class="border-0"><span class="font-weight-bold">Fecha de Nac.:</span> {{ \Carbon\Carbon::parse($cliente->conyugue->fechan)->isoFormat('D [de] MMMM [de] Y') }}</td>
                                <td class="border-0"><span class="font-weight-bold">Estatus:</span> {{ $cliente->conyugue->estatus }}</td>
                            </tr>
                            <tr >
                                <td class="border-0"><span class="font-weight-bold">SSN:</span> {{ $cliente->conyugue->ssn }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        @if ($cliente->dependientes === 'si')
            <div class="card row mt-4">
                <div class="card-header">
                    <span>Datos de los Dependientes</span>
                </div>
                <div class="card-body">
                    @foreach ($dependientes as $dependiente)
                        <table class="table">
                            <tbody>
                                <tr >
                                    <td class="border-0"><span class="font-weight-bold">{{ $cont++ }}. Nombres:</span> {{ $dependiente->nombres }}</td>
                                    <td class="border-0"><span class="font-weight-bold">Apellidos:</span> {{ $dependiente->apellidos }}</td>
                                    <td class="border-0"><span class="font-weight-bold">Genero:</span> {{ $dependiente->genero }}</td>
                                </tr>
                                <tr >
                                    <td colspan="2" class="border-0"><span class="font-weight-bold">Fecha de Nac.:</span> {{ \Carbon\Carbon::parse($dependiente->fechan)->isoFormat('D [de] MMMM [de] Y') }}</td>
                                    <td class="border-0"><span class="font-weight-bold">Relación:</span> {{ $dependiente->relacion }}</td>
                                </tr>
                                <tr >
                                    <td class="border-0"><span class="font-weight-bold">Estatus:</span> {{ $dependiente->estatus }}</td>
                                <td class="border-0"><span class="font-weight-bold">SSN:</span> {{ $dependiente->ssn }}</td>
                                <td class="border-0"><span class="font-weight-bold">Cobertura:</span> {{ $dependiente->cobertura }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="card row mt-4">
            <div class="card-header">
                <span>Información Financiera</span>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">Ingresos:</span> {{ $cliente->ingreso }}</td>
                            <td class="border-0"><span class="font-weight-bold">Banco:</span> {{ $cliente->banco }}</td>
                            <td class="border-0"><span class="font-weight-bold">Ruta:</span> {{ $cliente->ruta }}</td>
                        </tr>
                        <tr >
                            <td class="border-0"><span class="font-weight-bold">N° de Cuenta:</span> {{ $cliente->cuenta }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4">
            <p><span class="font-weight-bold">Atendido por el Agente:</span> {{ $cliente->user->name }} {{ $cliente->user->lastname }}</p>
        </div>


    </body>
</html>
