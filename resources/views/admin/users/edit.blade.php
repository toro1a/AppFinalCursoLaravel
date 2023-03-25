<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>

    <h1>Página para editar usuarios</h1>

    <form method="post" action = "/admin/users/store" files="true" enctype="multipart/form-data">

<table>

    <tr>

        <td><a>Foto de perfil:</a></td>

        <td colspan = "2"><input type="file" name="foto" id="foto" accept="image/*"></td>

        {{csrf_field()}}

    </tr>

    <tr>

        <td><a>Nombre usuario:</a></td>

        <td><input type = "text" name ="name" value = "{{$user->name}}"></td>

    </tr>

    <tr>

        <td><a>Rol:</a></td>

        <td>
            <select name="role_id">

                @foreach($roles as $role)

                    @if($user->role_id == $role->id)
                        <option value="{{$role->id}}" selected>{{$role->nombre_role}}</option>
                    @else
                        <option value="{{$role->id}}">{{$role->nombre_role}}</option>
                    @endif
                @endforeach

            </select>
        </td>

    </tr>

    <tr>

        <td><a>E-mail:</a></td>

        <td><input type = "email" name ="email" value = "{{$user->email}}"></td>

    </tr>

    <tr>

        <td><a>Verificar e-mail:</a></td>

        <td><input type = "email" name ="email_verified_at"></td>

    </tr>

    <tr align = "center">

        <td><input type="submit" name="Actualizar" value ="Actualizar"></td>

        <td><input type="reset" name="Reiniciar campos" value ="Reiniciar campos"></td>

    </tr>

</table>

</form>

@if(count($errors) > 0)

    @foreach($errors->all() as $error)

        <p>{{$error}}</p>

    @endforeach

@endif

       
    </body>
</html>