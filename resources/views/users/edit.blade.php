<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('user.update', $user)}}"  method="POST" >

        @csrf
        @method('put')

         <label>
            Nombre:
            <br>
          <textarea name="name"  cols="30" rows="10">{{old('name', $user->name)}}</textarea>
         </label>

         <label>
            Apellido:
            <br>
          <textarea name="lastname"  cols="30" rows="10">{{old('lastname', $user->lastname)}}</textarea>
         </label>
         <br>

         <label>
            Fecha De Nacimiento:
            <br>
          <textarea name="birthdate"  cols="30" rows="10">{{old('birthdate', $user->birthdate)}}</textarea>
         </label>

         <label>
            Ubicacion:
            <br>
          <textarea name="location"  cols="30" rows="10">{{old('location', $user->location)}}</textarea>
         </label>


    <label for="gender">Género:</label>
    <select id="gender" name="gender" required>
        <option value="Masculino" {{ old('gender', $user->gender) === 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Femenino" {{ old('gender', $user->gender) === 'Femenino' ? 'selected' : '' }}>Femenino</option>
        <option value="Otro" {{ old('gender', $user->gender) === 'Otro' ? 'selected' : '' }}>Otro</option>
    </select>

    <label for="documenttype">Tipo de documento</label>
    <select id="documenttype" name="documenttype" required>
        <option value="Cedula" {{ old('documenttype', $user->documenttype) === 'Cedula' ? 'selected' : '' }}>Masculino</option>
        <option value="Cedula Extranjeria" {{ old('documenttype', $user->documenttype) === 'Cedeula Extranjeria' ? 'selected' : '' }}>Femenino</option>
        <option value="Otro" {{ old('documenttype', $user->documenttype) === 'Otro' ? 'selected' : '' }}>Otro</option>
    </select>
     <label>
        Telefono:
        <br>
      <textarea name="phone"  cols="30" rows="10">{{old('phone', $user->phone)}}</textarea>
     </label>

     <label>
        Correo Electrónico:
        <br>
      <textarea name="email"  cols="30" rows="10">{{old('email', $user->email)}}</textarea>
     </label>


    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" placeholder="Dejar en blanco para mantener la misma">


        <button  type="submit">Actualizar Usuario</button>
    </body>
</html>
