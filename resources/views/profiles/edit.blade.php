<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('profile.update', $profile)}}"  method="POST" >

        @csrf
        @method('put')
        <label>
            Titulo:
            <br>
            <input name="titulo" type="text" value="{{ old('titulo', $profile->titulo) }}">
            <br>
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <input name="descripcion" type="text" value="{{ old('descripcion', $profile->descripcion) }}">
            <br>
        </label>
        <br>
        <label>
            Archivo hoja de vida:
            <br>
            <input name="Archivo_hvida" type="file" value="{{ old('Archivo_hvida', $profile->Archivo_hvida) }}">
            <br>
        </label>

            Foto de perfil:
            <br>
            <input name="foto_perfil" type="file" value="{{ old('foto_perfil', $profile->foto_perfil) }}">
            <br>
        </label>
        <br>

        <button  type="submit">Actualizar Perfil</button>
    </body>
</html>
