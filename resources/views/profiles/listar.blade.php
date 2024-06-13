<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Listar profile</h1>

@foreach ($profiles as $profile )
<tr>
    <td>{{$profile->titulo}}</td>
    <br>

    <td>{{$profile->descripcion}}</td>
    <br>

    <td>{{$profile->Archivo_hvida}}</td>
    <br>

    <td>{{$profile->foto_perfil}}</td>

    <td><a href="{{route('profile.show',$profile->id)}}">Mostrar</a></td>
        <td><a href="{{route('profile.edit',$profile->id)}}">Editar</a></td>

        <td>
        <form action="{{route('profile.destroy',$profile->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        </td>

        <td> <iframe src="{{ 'http://localhost/ayuemplenin/public/storage/imagenes/' .$profile->Archivo_hvida }}"  frameborder="0"></iframe></td>
        <td> <iframe src="{{ 'http://localhost/ayuemplenin/public/storage/profile_photos/' .$profile->foto_perfil }}"  frameborder="0"></iframe></td>

</tr>

@endforeach

</body>
</html>
