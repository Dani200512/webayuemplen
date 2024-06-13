<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Comment</h1>

    @foreach ($comments as $comment)
    <tr>
    <td>{{$comment->content}}</td>

        <td><a href="{{route('comment.show',$comment->id)}}">Mostrar</a></td>
        <td><a href="{{route('comment.edit',$comment->id)}}">Editar</a></td>


        <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        </td>


    </tr>
@endforeach

</body>
</html>
