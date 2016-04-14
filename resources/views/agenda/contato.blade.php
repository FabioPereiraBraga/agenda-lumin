<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <span class="pull-left">
            @if($pessoa->sexo === 'M' )
            <i class="fa fa-male"></i>
             @endif
               @if($pessoa->sexo === 'F' )
               <i class="fa fa-female"></i>
            @endif
            </span> &nbsp;
        
            {{ $pessoa->apelido}}
          
        </div>
    </div>
  <div class="panel-body">
      <h3>
          {{ $pessoa->nome}}
          <span class="pull-right">
              <a href="{{ route('pessoa.edit',['id'=>$pessoa->id])}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar Contato">
                  <i class="fa fa-edit"></i>
              </a>
               <a href="{{ route('pessoa-delete',['id'=>$pessoa->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar Contato">
                  <i class="fa fa-minus-circle"></i>
              </a>
          </span>
      </h3>
      <table class="table table-hover">
      
         @foreach( $pessoa['telefones'] as $telefone)
          <tr>
              <td> {{ $telefone->descricao}}</td>
              <td> {{ $telefone->numero}}</td>
            
              <td>
                  <a href="{{ route('telefone.delete',['id'=>$telefone->id]) }}" class="text-danger"
                     data-toggle="tooltip" data-placement="top" title="Apagar Contato">
                      <i class="fa fa-minus-circle"></i></a>
              </td>
          </tr>
          @endforeach
      </table>
  </div>
  <div class="panel-footer">Panel footer</div>
</div>