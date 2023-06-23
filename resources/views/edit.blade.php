<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    
    <form action="{{ route('update', $note->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $note->nombre }}">
        </div>
        <div class="form-group">
            <label for="referencia">Referencia:</label>
            <input type="text" id="referencia" name="referencia" class="form-control" value="{{ $note->referencia }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control">{{ $note->descripcion }}</textarea>
        </div>
        <!-- Otros campos del formulario -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    
</body>
</html>