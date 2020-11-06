@extends('templates.templates')

@section('content')
<div class="container">
  <form action="{{ route('receitas.create') }}" method="post">
    @csrf
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Nome Cliente</label>
      <input type="text" name="nome_cliente" class="form-control" id="nome_cliente" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Valor Receita</label>
      <input type="text" name="valor_receita" class="form-control" id="valor_receita" onkeypress="return SomenteNumero(event)">
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