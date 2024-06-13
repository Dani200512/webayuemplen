<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>

    <h1>Listar user</h1>

    @foreach ($users as $user)
    <tr>
        <br>
        <td>{{$user->name}}</td>
        <br>
        <td>{{$user->lastname}}</td>
        <br>
        <td>{{$user->birthdate}}</td>
        <br>
        <td>{{$user->location}}</td>
        <br>
        <td>{{$user->gender}}</td>
        <br>
        <td>{{$user->documenttype}}</td>
        <br>
        <td>{{$user->phone}}</td>
        <br>
        <td>{{$user->email}}</td>
        <br>
        <td>{{$user->password}}</td>
        <br>
        <td><a href="{{route('user.show',$user->id)}}">Mostrar</a></td>
        <td><a href="{{route('user.edit',$user->id)}}">Editar</a></td>

        <td>
        <form action="{{route('user.destroy',$user->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        </td>

    </tr>
@endforeach

</body>
</html>
