<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Perfil</title>
</head>
<body>
    <h1>Crear Perfil</h1>

    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <input  type="text"  id="descripcion" name="descripcion">
        </div>
        <div>
            <label for="Archivo_hvida">Archivo Hoja de Vida:</label>
            <input type="file" id="Archivo_hvida" name="Archivo_hvida">
        </div>
        <div>
            <label for="foto_perfil">Foto de Perfil:</label>
            <input type="file" id="foto_perfil" name="foto_perfil">
        </div>
        <button type="submit">Crear Perfil</button>
    </form>
</body>
</html>
