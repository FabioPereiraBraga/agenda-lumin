<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Agenda</title>

  
    <link href="/css/app.css" rel="stylesheet">

   
  </head>
  <body>

      <div class="container">

          <h1>
              Agenda  Telefonica <br/>

              <small><i class="glyphicon glyphicon-phone-alt"></i></small>
              <span class="pull-right">
                  <form action="{{ route('agenda.busca')}}" method="POST">
                      <div class="col-lg-12">
    <div class="input-group">
        <input type="text" class="form-control"  name="busca" placeholder="Pesquisar Contato">
      <span class="input-group-btn">
          <button class="btn btn-default" type="button"> <i class="fa fa-search"></i></button>
      </span>
    </div><!-- /input-group -->
  </div>
                  </form>
              </span>
          </h1>
  <hr>
          <div class="row">
              <div class="col-lg-12">
                  @foreach($letras as $letra)
                  <a class="btn btn-primary btn-xs" href="{{ route('agenda-letra' , ['letra'=>$letra])}}">{{$letra}}</a>
                  @endforeach
              </div>
          </div>

  <div class="row">
      <div class="btn-row">
      <a href="#" class="btn btn-primary ">Novo Contato</a>
  </div>
   </div>
  <div class="row">
      @yield('content')
  </div>
      </div>

    <script src="/js/script.js"></script>
  </body>
</html>