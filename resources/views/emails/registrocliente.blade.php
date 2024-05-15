<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Consent Form</title>

    </head>
<body>

    <div class="container">
        <h4>Email sent from the portal: starsseguros.com</h4>
    </div>

    <div class="container">
        <p>
            Dear: <span class="font-weight-bold">{{ $datosemail['nombres_cliente'] }} {{ $datosemail['apellidos_cliente'] }}</span>
        </p>

        <p>
            You have successfully registered with our insurance company, accepting all terms and conditions.
        </p>

        <p>
            Your advisor is: <span class="font-weight-bold">{{ $datosemail['nombres_agente'] }} {{ $datosemail['apellidos_agente'] }}</span>
        </p>

        {{-- /* Prueba local */ --}}
        <p>
            Download your consent form at the following link: <a class="btn btn-primary" href="http://crmchoicelife.test/pdf/{{ $datosemail['nombres_cliente'] }}_{{ $datosemail['apellidos_cliente'] }}.pdf" target="_blank" rel="noopener noreferrer">download</a>
        </p>

        {{-- prueba Produccion --}}
        {{-- <p>
            Download your consent form at the following link: <a href="http://choicecrm.ragrtics.com/laravel/public/pdf/{{ $datosemail['nombres_cliente'] }}_{{ $datosemail['apellidos_cliente'] }}.pdf" target="_blank" rel="noopener noreferrer">download</a>
        </p> --}}

    </div>




</body>
</html>
