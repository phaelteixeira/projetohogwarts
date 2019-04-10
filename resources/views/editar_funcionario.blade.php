<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Funcionario</title>
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
                <h3>Edição de Funcionarios</h3>        
                    <form action = "{{route('funcionarios.update', $funcionario)}}" method = "POST">
                    @csrf
                    @method('PUT')
                    <div class = "form-group">
                        <label for="nome">Nome: </label>
                        <input type = "text" class = "form-control" id="nome" name="nome" value="{{$funcionario->nome}}">
                        <label for="endereco">Endereco: </label>
                        <input type = "text" class = "form-control" id="endereco" name="endereco" value="{{$funcionario->endereco}}">
                        <label for="departamento_id">Departamento: </label>
                        <select  id="departamento_id" name = "departamento_id" class="form-control">
                        @foreach($departamentos as $dep)
                            @if($dep->id == $funcionario->departamento_id) 
                                <option selected value = {{$dep->id}}> {{$dep->nome}} </option>
                            @else
                                <option value = {{$dep->id}}> {{$dep->nome}} </option>
                            @endif
                        @endforeach                
                        </select>
                        </select>
                        <label for="foto">Foto: </label>
                        <input type = "file" class = "form-control-file" id="foto" name="foto">
                        <br>
                        <button class = "btn btn-success" type = "submit">Pronto</button>
                    </div>
                    </form>
                </div>
              </div>
              <div class = "col-md-4"></div>
          <div>
      </div>
  </div>
</body>
</html>