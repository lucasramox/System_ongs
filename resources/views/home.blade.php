@extends('templates.templates')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a class="navbar-brand" href="#">Gerenciamentos de Custo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/fornecedor')}}">Cadastro Fornecedor<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/cliente')}}">Cadastro Clientes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatorios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/saldo/relatorio')}}">Entradas e Saidas</a>
          <a class="dropdown-item" href="{{url('/fornecedor/relatorio')}}">Maiores custos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/receita/relatorio')}}">Maiores receitas</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="d-flex justify-content-center py-5">
  <div class="row">
    <div class="col-auto">
      <h1>Relatório de saldo final</h1>
      </div>
       <div class="col-auto">
      <h2 class="py-1">{{$saldo}}</h2>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection