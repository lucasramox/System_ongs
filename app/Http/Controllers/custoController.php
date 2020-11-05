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
        ->select('nome_fornecedor',DB::raw('SUM(valor_custo) as soma_custo'))
        ->groupBy('nome_fornecedor')
        ->orderBy('soma_custo','desc')
        ->get();

        $array = json_decode(json_encode($custos), true);
        $valorTotal = 0;
        $tam_array = count($array);
        for($i=0;$i<$tam_array;$i++){
            $valorTotal += $array[$i]['soma_custo'];
        }
        $array_return = [];
        array_push($array_return,$array,round($valorTotal,2));
        return response()->json(compact('array_return'));
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
