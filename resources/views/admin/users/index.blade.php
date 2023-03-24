<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>

        <h1>Página para los admins</h1>

        <table width = "1000" border = "1">

        <tr>

            <th>Nombre</th>
            <th>Rol</th>
            <th>Email</th>
            <th>Creación</th>
            <th>Última actualización</th>

        </tr>

        @if($users)

            @foreach($users as $user)
            
                <tr>

                    <td>{{$user->name}}</td>
                    <td>{{$user->role_id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>

                </tr>

            @endforeach

        @endif

        </table>
       
    </body>
</html>