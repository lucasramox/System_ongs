@extends('templates.templates')

@section('content')
<div class="container">
  <form action="{{ route('custo.create') }}" method="post">
    @csrf
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nome Do Fornecedor</label>
      <input type="text" name="nome_fornecedor" class="form-control" id="nome_fornecedor" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Valor do Custo</label>
      <input type="text" name="valor_custo" class="form-control" id="valor_custo" onkeypress="return SomenteNumero(event)">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<script language='JavaScript'>
  function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
      if (tecla == 8 || tecla == 0) return true;
      else return false;
    }
  }
</script>
@endsection