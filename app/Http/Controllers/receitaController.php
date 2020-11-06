<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;
use Illuminate\Support\Facades\DB;

class receitaController extends Controller
{
    //
    public function index()
    {
        $receitas = DB::table('receitas')
            ->select('nome_cliente', DB::raw('SUM(valor_receita) as soma_receita'))
            ->groupBy('nome_cliente')
            ->orderBy('soma_receita', 'desc')
            ->get();


        $array = json_decode(json_encode($receitas), true);
        $valorTotal = 0;
        $tam_array = count($array);
        for ($i = 0; $i < $tam_array; $i++) {
            $valorTotal += $array[$i]['soma_receita'];
        }
        $array_return = [];
        array_push($array_return, $array, round($valorTotal, 2));
        $clientes = $array_return[0];
        return view('relatorio_cliente')->with('clientes', $clientes);
    }

    public function store(Request $request)
    {
        $receita = new receita;
        $receita->nome_cliente = $request->nome_cliente;
        $receita->valor_receita = $request->valor_receita;
        $receita->save();
        return view('formulario_cliente');
    }
}
