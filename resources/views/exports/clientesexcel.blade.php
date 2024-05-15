<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <title>Consent Form</title>

    </head>
<body>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Condado</th>
                <th>Estado</th>
                <th>Codigo Postal</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Estatus</th>
                <th>SSN</th>
                <th>Estado Civil</th>
                <th>Ingresos Anuales</th>
                <th>Dependientes</th>
                <th>Fecha de Registro</th>
                <th>Agente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->id }}</th>
                    <th>{{ $cliente->nombres }}</th>
                    <th>{{ $cliente->apellidos }}</th>
                    <th>{{ $cliente->genero }}</th>
                    <th>{{ \Carbon\Carbon::parse($cliente->fechan)->isoFormat('D [de] MMMM [de] Y') }}</th>
                    <th>{{ $cliente->direccion }}</th>
                    <th>{{ $cliente->ciudad }}</th>
                    <th>{{ $cliente->condado }}</th>
                    <th>{{ $cliente->estado }}</th>
                    <th>{{ $cliente->postal }}</th>
                    <th>{{ $cliente->telefono }}</th>
                    <th>{{ $cliente->email }}</th>
                    <th>{{ $cliente->estatus }}</th>
                    <th>{{ $cliente->ssn }}</th>
                    <th>{{ $cliente->estadocivil }}</th>
                    <th>{{ $cliente->ingreso }}</th>
                    <th>{{ $cliente->dependientes }}</th>
                    <th>{{ \Carbon\Carbon::parse($cliente->created_at)->isoFormat('D [de] MMMM [de] Y') }}</th>
                    <th>{{ $cliente->user->name }} {{ $cliente->user->lastname }}</th>

                </tr>
            @endforeach
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
