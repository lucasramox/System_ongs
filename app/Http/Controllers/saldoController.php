<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class saldoController extends Controller
{
    //
    public function index()
    {
        $receitas = DB::table('receitas')->max('valor_receita');
        $custos = DB::table('custos')->max('valor_custo');
        $saldo = $receitas - $custos;
        return view('home')->with('saldo', $saldo); 
    }
}
