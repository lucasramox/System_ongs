<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Custo;
use Illuminate\Support\Facades\DB;

class custoController extends Controller
{
    //

    public function index()
    {
        $custos = DB::table('custos')
        ->select('nome_fornecedor','valor_custo')
        ->groupBy('nome_fornecedor','id')
        ->get();
        //return response()->json(compact('custos'));
        return response()->json($custos);
    }

    public function store(Request $request)
    {
        
        $custo = new custo;
        $custo->nome_fornecedor = $request->nome;
        $custo->valor_custo = $request->valor_custo;
        $custo->save();
        return response()->json($request->all());
    }

}
