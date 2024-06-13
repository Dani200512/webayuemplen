<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar Mensaje</h1>

    @foreach ($messages as $message)
    <tr>
        <td>{{$message->content}}</td>
        <td>{{$message->state}}</td>

        <td><a href="{{route('message.show',$message->id)}}">Mostrar</a></td>
        <td><a href="{{route('message.edit',$message->id)}}">Editar</a></td>


        <form action="{{route('message.destroy',$message->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        </td>


    </tr>
@endforeach
