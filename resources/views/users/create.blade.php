<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">

        @csrf


    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>

    <label for="lastname">Apellido:</label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="birthdate">Fecha de Nacimiento:</label>
    <input type="date" id="birthdate" name="birthdate" required>

    <label for="location">Ubicación:</label>
    <input type="text" id="location" name="location">

    <label for="gender">Género:</label>
    <select id="gender" name="gender" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
    </select>

    <label for="gender">Tipo de documento:</label>
    <select id="documenttype" name="documenttype" required>
        <option value="Cedula">Cedula</option>
        <option value="Cedula Extranjeria">Cedula Extranjeria</option>
        <option value="Otro">Otro</option>
    </select>


    <label for="phone">Teléfono:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <select name="profile_id">
        @foreach ( $profiles as $profile )
        <option value="{{$profile->id}}">{{$profile->id}} - {{$profile->titulo}} </option>

        @endforeach
    </select>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
