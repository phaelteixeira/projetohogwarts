<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NEW PAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @foreach ($itens as $i)
            <li class="nav-item">
              <a class="nav-link" href="#">{{$i}}</a>
            </li>
            @endforeach
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="BUSQUE AQUI" aria-label="BUSQUE AQUI">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">PESQUISAR AGORA</button>
          </form>
        </div>
      </nav>
