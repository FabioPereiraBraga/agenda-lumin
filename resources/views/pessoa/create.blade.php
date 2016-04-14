@extends('layout')

@section('content')
<div class="col-lg-6">
    <form class="form-horizontal" action="{{ route('pessoa.store') }}" method="post">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
        <input type="nome" class="form-control" value="{{ old('nome')}}" id="nome" name="nome" placeholder="Nome">
    </div>
  </div>
  <div class="form-group">
    <label for="Apelido" class="col-sm-2 control-label">Apelido</label>
    <div class="col-sm-10">
        <input type="apelido" class="form-control" value="{{ old('apelido')}}" id="apelido"name="apelido" placeholder="apelido">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>
           
            <input type="radio" name="sexo" value="F" >
            <i class="fa fa-female"></i>
        </label>
           <label>
               <input type="radio" name="sexo" value="M"  > <i  class="fa fa-male"></i>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
</form>
 </div>

<div class="col-lg-6">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
@endsection