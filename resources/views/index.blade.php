<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <br>
    <a href="{{ route('create') }}">Crear nueva tarea</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($notes as $note )
                <tr>
                    <td>{{$note->nombre}}</td>
                    <td>{{$note->referencia}}</td>
                    <td>
                        <a href="{{ route('edit', $note->id) }}">Editar</a>
                        <a href="{{ route('delete', $note->id) }}">Borrar</a>
                        <a href="{{ route('show', $note->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>