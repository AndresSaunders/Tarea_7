<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
    <h1>Editar Asignatura</h1>

    <form action="{{url('/Materias')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="Asignatura">Asignatura</label>
        <input type="text" name="Asignatura" value="{{$materias->Asignatura}}" id="Asignatura">
        <br>
        <br>
        <label for="Actividad1">Actividad1</label>
        <input type="text" name="Actividad1" value="{{$materias->Actividad1}}" id="Actividad1">
        <br>
        <br>
        <label for="CalificacionAct1">CalificacionAct1</label>
        <input type="text" name="CalificacionAct1" value="{{$materias->CalificacionAct1}}" id="CalificacionAct1">
        <br>
        <br>
        <label for="Actividad2">Actividad2</label>
        <input type="text" name="Actividad2" value="{{$materias->Actividad2}}" id="Actividad2">
        <br>
        <br>
        <label for="CalificacionAct2">CalificacionAct2</label>
        <input type="text" name="CalificacionAct2" value="{{$materias->CalificacionAct2}}" id="CalificacionAct2">
        <br>
        <br>
        <input type="submit" value="Guardar datos">
    </form>

</body>
</html>