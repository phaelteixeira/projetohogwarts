<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Login</title>
<link href="{{asset('css/css-login.css')}}" rel="stylesheet">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />

<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Login</h2>
						<p>Seja bem vindo, faça login ou registre-se</p>
            <p>Se não possui uma contra clique em baixo!</p>
						<a href="/cadastro/sala" class="btn btn-danger">Registrar</a>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" id="email" class="form-control" placeholder="Email" required = "" autofocus = "">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" id = "senha" class="form-control" placeholder="Senha" required = "" autofocus = "">
									</div>
									<div class="form-group form-check">
    								<input type="checkbox" class="form-check-input" id="exampleCheck1">
   									<label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
										<a href="" style="margin-left:70"><u>Esqueceu a senha?</u></a>
  								</div>
									<label>
                  <a href="/home" class="btn btn-dark">Cancelar</a>
                  <a href="#" class="btn btn-success">Login</a>
               </form>
            </div>
         </div>
      </div>