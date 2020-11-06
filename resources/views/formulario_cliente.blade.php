@extends('templates.templates')

@section('content')
<br>
<div class="container py-5">
  <a class="btn btn-light shadow-sm" href="{{url('/')}}">Voltar</a>
</div>
<div class="container shadow-sm">
 <div class="py-4">
 <form class="" action="{{ route('receitas.create') }}" method="post">
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
    <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
  </form>
 </div>
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