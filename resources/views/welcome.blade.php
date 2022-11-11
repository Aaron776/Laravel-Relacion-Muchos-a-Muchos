<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tabla Relacional </title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h3>Alumno <span class="badge bg-secondary">{{$alumno->nombre}}</span> cursa las materia: </h3>
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumno->materias as $item)
                               <tr>
                                    <td>{{$item->nombre}}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>

            <div class="col-auto">
                <h3>La materia <span class="badge bg-secondary">{{$materia->nombre}}</span> esta siendo cursada por: </h3>
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Alumnos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materia->alumnos as $item)
                               <tr>
                                    <td>{{$item->nombre}}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


            

       
 
