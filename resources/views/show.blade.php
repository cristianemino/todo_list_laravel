<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $note->nombre }} </title>
</head>
<body>

    <br>
    <p>ID: {{ $note->id }}</p>

    <p>Nombre: {{ $note->nombre }}</p>

    <p>Referencia: {{ $note->referencia }}</p>
    
    <p>Descripción: {{ $note->descripcion }}</p>

</body>
</html>