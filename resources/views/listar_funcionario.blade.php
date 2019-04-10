<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Funcionarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css_style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
</head>
<body>
<div class="login-page">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-md-3"></div>
                <div class = "col-xl-6">
                <br>
                <div class = "div-borda">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">ID</th>
                    <th scope="col">R.U.B</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($funcionarios as $f)
                        <tr>
                            <td><img src="../storage/{{$f->foto}}" width="75"></td>       
                            <td>{{$f->id}}</td>
                            <td>{{$f->RUB}}</td>
                            <td>{{$f->nome}}</td>
                            <td>{{$f->sexo}}</td>
                            <td>{{$f->endereco}}</td>
                            <td>
                            <td>
                            <form action = "{{route('funcionarios.destroy', $f)}}" method = "POST">
                                @csrf
                                <a class = "btn btn-sm btn-success" href="{{route('funcionarios.edit', $f)}}">Editar</a>
                                @method('DELETE')
                                <button type = "submit" class = "btn btn-sm btn-danger">Excluir</button>
                            </form>  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
</div>
    </table>
    <a href="/home" type = "cancel" class = "btn btn-danger">Voltar</a>
</body>
</html>