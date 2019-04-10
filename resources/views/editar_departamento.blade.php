<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Departamento</title>
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
                <h3>Edição de Departamentos</h3>        
                    <form action = "{{route('departamentos.update', $departamento)}}" method = "POST">
                    @csrf
                    @method('PUT')
                    <div class = "form-group">
                        <label for="nome">Nome: </label>
                        <input type = "text" class = "form-control" id="nome" name="nome" value="{{$departamento->nome}}">
                        <label for="nome">Coordenador: </label>
                        <input type = "text" class = "form-control" id="coordenador" name="coordenador" value="{{$departamento->coordenador}}">
                        <label for="sala_id">Departamento: </label>
                        <select  id="sala_id" name = "sala_id" class="form-control">
                        @foreach($salas as $s)
                            @if($s->id == $departamento->sala_id) 
                                <option selected value = {{$s->id}}> {{$s->nome}} </option>
                            @else
                                <option value = {{$s->id}}> {{$s->nome}} </option>
                            @endif
                        @endforeach                
                        </select>
                        </select>
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