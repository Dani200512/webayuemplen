<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Publicacion</title>
</head>
<body>
<h1>Crear Publicacion</h1>

<form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data">

    @csrf


    <label for="publication_type">Tipo De Publicacion:</label><br>
    <input type="Text" id=" publication_type" name=" publication_type"><br>


    <label for="content">Contenido:</label><br>
    <input type="file" id="content" name="content"><br>

    <label for="description">Descripción:</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

    <label for="number_likes">Número de Likes:</label><br>
    <input type="number" id="number_likes" name="number_likes"><br>

    <label for="number_comments">Número de Comentarios:</label><br>
    <input type="number" id="number_comments" name="number_comments"><br>

    <br>

    <select name="profile_id">
        @foreach ( $profiles as $profile )
        <option value="{{$profile->id}}">{{$profile->id}} - {{$profile->titulo}} </option>

        @endforeach
    </select>

    <button type="submit">Crear Publicación</button>
</form>
</body>
</html>
