<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Comentario</title>
</head>
<body>
    <h1>Crear Comentario</h1>

    <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
@csrf


   <label for="content">Contenido</label><br>
    <textarea id="content" name="content" ></textarea><br>

    <select name="publication_id">
        @foreach ($publications as $publication )
        <option value="{{$publication->id}}">{{$publication->id}} - {{$publication->content}} </option>

        @endforeach
    </select>

    <button type="submit">Crear Comentario</button>
</body>
</html>
