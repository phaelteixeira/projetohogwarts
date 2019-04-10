<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro Funcionário</title>
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
                <div class = "col-md-4"></div>
                <div class = "col-md-4">
                <br>
                <div class = "div-borda">
                    <h3>Cadastro de Funcionário</h3>            
                    <form action = "{{route('funcionarios.store')}}" method = "POST" enctype="multipart/form-data">
                    @csrf                
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control tf-custom ipt" type="text" id="nome"name="nome" size=20 required="" autofocus="" placeholder="Digite o seu nome"><br>
                            <div class="form-group">
                                <label for="sexo">Escolha seu sexo:</label>
                                <input type="checkbox" name="sexo" value="M"> <label>Masculino</label>
                                <input type="checkbox" name="sexo" value="F"> <label>Feminino</label>
                                <input type="checkbox" name="sexo" value="O"> <label>Outro</label>
                                </select>
                            </div>
                            <label for="endereco">Endereço</label>
                            <input class="form-control ipt" type="text" id="endereco" name="endereco" size=80  required="" autofocus="" placeholder="Digite seu endereço"><br>
                            <label for="rub">R.U.B. (Registro Único de Bruxo)</label>
                            <input class="form-control tf-custom ipt" type="number" id="RUB" name="RUB" size=20  required="" autofocus="" placeholder="Digite seu RUB"><br>
                            <label for="departamento_id">Departamento: </label>
                            <select class = "form-control" name = "departamento_id" id="departamento_id">
                            @foreach($departamentos as $d)
                                <option value="{{$d->id}}">{{$d->nome}}</option>
                            @endforeach
                            </select>
                            <label for="foto">Foto: </label>
                            <input type = "file" class = "form-control-file" id="foto" name="foto">
                            <br>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <a href="/home" class="btn btn-md btn-danger btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <button href="{{route('funcionarios.store')}}" type="submit" class="btn btn-md btn-success btn-block">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class = "col-md-4"></div>
            <div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
