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
        //$receitas = Receita::all();
        //return response()->json(compact('receitas'));
        $receitas = DB::table('receitas')
        ->select('nome_cliente','valor_receita')
        ->groupBy('nome_cliente','id')
        ->get();
        //return response()->json(compact('receitas'));
        return response()->json(compact('receitas'));
    }

    public function store(Request $request)
    {
        $receita = new receita;
        $receita->nome_cliente = $request->nome;
        $receita->valor_receita = $request->valor_receita;
        $receita->save();
        return response()->json($request->all());
    }
}
