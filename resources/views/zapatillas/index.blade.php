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

                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}} <br>
                    @endforeach
                </div>
                @endif
                
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <form action="{{route('zapatillas.store')}}" method="POST">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{old('name')}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="marca" class="form-control" placeholder="Marca" value="{{old('marca')}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="color" class="form-control" placeholder="Color" value="{{old('color')}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="precio" class="form-control" placeholder="Precio"value="{{old('precio')}}">
                                </div>
                                <div class="col-auto">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Color</th>
                            <th>Precio</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zapatillas as $zap)
                            <tr>
                                <td>{{ $zap->id }}</td>
                                <td>{{ $zap->name}}</td>
                                <td>{{ $zap->marca }}</td>
                                <td>{{ $zap->color }}</td>
                                <td>{{ $zap->precio }}</td>
                                
                                <td>
                                    <form action="{{ route('zapatillas.destroy', $zap) }}" method="POST">
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