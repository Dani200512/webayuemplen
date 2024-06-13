<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Publicación</title>
</head>
<body>

    <form action="{{ route('publication.update', $publication) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

        <label>
            Tipo de Publicacion:
            <br>
            <textarea name="publication_type" rows="4" cols="50">{{ old('publication_type', $publication->publication_type) }}</textarea>
            <br>
        </label>
        <br>

        <label>
            Contenido:
            <br>
            <textarea name="content" rows="4" cols="50">{{ old('content', $publication->content) }}</textarea>
            <br>
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="4" cols="50">{{ old('description', $publication->description) }}</textarea>
            <br>
        </label>
        <br>
        <label>
            Número de Likes:
            <br>
            <input name="number_likes" type="number" value="{{ old('number_likes', $publication->number_likes) }}">
            <br>
        </label>
        <br>
        <label>
            Número de Comentarios:
            <br>
            <input name="number_comments" type="number" value="{{ old('number_comments', $publication->number_comments) }}">
            <br>
        </label>
        <br>
        <button type="submit">Actualizar Publicación</button>
    </form>

</body>
</html>
