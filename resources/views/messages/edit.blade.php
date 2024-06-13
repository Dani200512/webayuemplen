<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Comentario</title>
</head>
<body>

    <form action="{{ route('message.update', $message) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')


        <label>
            Contenido:
            <br>
            <textarea name="content" rows="4" cols="50">{{ old('content', $message->content) }}</textarea>
            <br>
        </label>
        <br>

        <label>
            Estado Mensaje:
            <br>
            <textarea name="state" rows="4" cols="50">{{ old('state', $message->state) }}</textarea>
            <br>
        </label>
        <br>


        <button type="submit">Actualizar Mensaje</button>
    </form>

</body>
</html>
