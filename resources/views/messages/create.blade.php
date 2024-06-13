<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Mensaje</title>
</head>
<body>
<h1>Crear Mesaje</h1>
<form action="{{route('messages.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <label for="content">Contenido:</label><br>
    <input type="text" id="content" name="content"><br>

    <label for="state">Estado Mensaje:</label><br>
    <textarea id="state" name="state" ></textarea><br>

    <select name="profile_id">
        @foreach ( $profiles as $profile )
        <option value="{{$profile->id}}">{{$profile->id}} - {{$profile->titulo}} </option>

        @endforeach
    </select>

    <button type="submit">Enviar Mensaje</button>
</body>
</html>
