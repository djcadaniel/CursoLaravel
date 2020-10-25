<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($semaforos as $sem)
                            <tr>
                                <td>{{ $sem->id }}</td>
                                <td>{{ $sem->nombre }}</td>
                                <td>{{ $sem->latitude }}</td>
                                <td>{{ $sem->longitude }}</td>
                                
                                <td>
                                    <form action="{{ route('semaforos.destroy', $sem) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="eliminar" class="btn btn-sm btn-danger"
                                        onclick = "return confirm('Desea eliminar... ? ')">

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>