<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>

        <h1>Página para agregar usuarios</h1>

        <form method="post" action = "/admin/users/store" files="true" enctype="multipart/form-data">

            <table>

                <tr>

                    <td><a>Foto de perfil:</a></td>

                    <td colspan = "2"><input type="file" name="foto" id="foto" accept="image/*"></td>

                    {{csrf_field()}}

                </tr>

                <tr>

                    <td><a>Nombre usuario:</a></td>

                    <td><input type = "text" name ="name"></td>

                </tr>

                <tr>

                    <td><a>Rol:</a></td>

                    <td>
                        <select name="role_id">

                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->nombre_role}}</option>
                            @endforeach

                        </select>
                    </td>

                </tr>

                <tr>

                    <td><a>E-mail:</a></td>

                    <td><input type = "email" name ="email"></td>

                </tr>

                <tr>

                    <td><a>Verificar e-mail:</a></td>

                    <td><input type = "email" name ="email_verified_at"></td>

                </tr>

                <tr>

                    <td><a>Contraseña:</a></td>

                    <td><input type = "password" name ="password"></td>

                </tr>

                <tr align = "center">

                    <td><input type="submit" name="enviar" value ="Enviar"></td>

                    <td><input type="reset" name="borrar" value ="Borrar"></td>

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