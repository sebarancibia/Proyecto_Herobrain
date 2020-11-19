<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <style>
        #est{
            border-collapse: collapse;
            width: 100%;
        }
        #est td, #est th{
            border: 1px solid #dddd;
            padding 8px;
        }
        #emp tr:nth-child(even){
            background-color: #0bfdfd;
        }
        #emp th{
            padding-top:12px;
            padding-bottom:12px;
            text-align:left;
            background-color: #4CAF50;
            colr:#fff;
            
        }
    </style>
</head>
<body>
    <table id="est">
        <thead>
            <tr>
                <th>RUT</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                <th>CODIGO CARRERA</th>
                <th>CORREO</th>
            </tr>    
        </thead>
        <tbody>
            @foreach ($estudiantes as $est)
                <tr>
                    <td>{{$est->rut_estudiante}}</td>
                    <td>{{$est->apellido_paterno}}</td>
                    <td>{{$est->apellido_materno}}</td>
                    <td>{{$est->nombre_estudiante}}</td>
                    <td>{{$est->codigo_carrera}}</td>
                    <td>{{$est->correo_estudiante}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>