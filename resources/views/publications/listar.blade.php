<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Publication</h1>

    @foreach ($publications as $publication)
    <tr>
        <td>{{$publication->publication_type}}</td>
        <br>
        <td>{{$publication->content}}</td>
        <br>
        <td>{{$publication->description}}</td>
        <br>
        <td>{{$publication->number_likes}}</td>
        <br>
        <td>{{$publication->number_comments}}</td>
        <br>
        <td><a href="{{route('publication.show',$publication->id)}}">Mostrar</a></td>
        <td><a href="{{route('publication.edit',$publication->id)}}">Editar</a></td>

        <td>
        <form action="{{route('publication.destroy',$publication->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        </td>
        <td> <iframe src="{{ 'http://localhost/ayuemplenin/public/storage/content/' .$publication->content }}"  frameborder="0"></iframe></td>


    </tr>
@endforeach

</body>
</html>
