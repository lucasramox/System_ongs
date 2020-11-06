@extends('templates.templates')

@section('content')
<div class="container">
  <a href="{{url('/')}}">Voltar</a>
</div>
<div class="container">
  <h4>Relatório de fornecedores</h4>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Fornecedor</th>
        <th scope="col">Custo total</th>
      </tr>
    </thead>
    <tbody>

      @for($i=0;$i< count($fornecedores);$i++) <tr>
        <td>{{$fornecedores[$i]['nome_fornecedor']}}</td>
        <td>{{$fornecedores[$i]['soma_custo']}}</td>
        </tr>
        @endfor
    <tbody>
  </table>
</div>

@endsection