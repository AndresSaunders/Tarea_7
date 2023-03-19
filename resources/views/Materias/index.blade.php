<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/app.css">
    <title>Materias</title>
</head>
<body>
    <h1>Inicio Materias</h1>

    <table>
        <thead>
            <tr>#</tr>
            <tr>Asignatura</tr>
            <tr>Actividad1</tr>
            <tr>CalificacionAct1</tr>
            <tr>Actividad2</tr>
            <tr>CalificacionAct2</tr>
        </thead>
        <tbody>
            @foreach($Materias as $Materia)
            <tr>
                <td>{{ $Materia->id }}</td>
                <td>{{ $Materia->Asignatura }}</td>
                <td>{{ $Materia->Actividad1 }}</td>
                <td>{{ $Materia->CalificacionAct1 }}</td>
                <td>{{ $Materia->Actividad2 }}</td>
                <td>{{ $Materia->CalificacionAct2 }}</td>
                <td><a href="{{url('/Materias/'.$Materia->id.'/edit')}}">Editar</a> | 
                    <form action="{{url('/Materias/'.$Materia->id)}}" method="post">
                        @csrf {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>