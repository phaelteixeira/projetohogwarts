<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar Sala</title>
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
                    <h3>Cadastro Sala</h3>            
                    <form action = "{{route('salas.store')}}" method = "POST">  
                    @csrf              
                        <div class="form-group">
                            <label for="nome">Código da Sala:</label>
                            <input class="form-control tf-custom ipt" type="number" id="id"name="id" size=20 placeholder="Digite o código da sala"required="" autofocus=""><br>
                            <label for="nome">Nome da Sala:</label>
                            <input class="form-control tf-custom ipt" type="text" id="nome" name="nome" size=30 placeholder="Digite o nome da sala"required="" autofocus=""><br>
                            <div class="col-md-6 col-sm-6 col-md-6">
                                <a href="/home" class="btn btn-md btn-danger btn-block">Cancelar</a>
                            </div>
                            <form action = "{{route('salas.store')}}" method = "POST">
                                <div class="col-md-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-md btn-success btn-block">Cadastrar</button>
                                </div>
                            </form>
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
