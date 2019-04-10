<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Departamentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/css_style.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
</head>
<body >
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
                    <th scope="col">ID</th>
                    <th scope="col">Coordenador</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departamentos as $d)
                        <tr>       
                            <td>{{$d->id}}</td>
                            <td>{{$d->coordenador}}</td>
                            <td>{{$d->nome}}</td>
                            <td>
                            <form action = "{{route('departamentos.destroy', $d)}}" method = "POST">
                                @csrf
                                <a class = "btn btn-success" href="{{route('departamentos.edit', $d)}}">Editar</a>
                                @method('DELETE')
                                <button type = "submit" class = "btn btn-danger">Excluir</button>
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