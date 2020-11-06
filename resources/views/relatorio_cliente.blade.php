@extends('templates.templates')

@section('content')

<div class="container py-5">
  <a class="btn btn-light shadow-sm" href="{{url('/')}}">Voltar</a>
</div>
<div class="container">
  <h4>Relatório dos clientes</h4>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Cliente</th>
        <th scope="col">Receita total</th>
      </tr>
    </thead>
    <tbody>

      @for($i=0;$i < count($clientes);$i++) <tr>
        <td>{{$clientes[$i]['nome_cliente']}}</td>
        <td>{{$clientes[$i]['soma_receita']}}</td>
        </tr>
        @endfor
    <tbody>
  </table>
</div>

@endsection