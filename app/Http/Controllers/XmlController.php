<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessorio;

class XmlController extends Controller
{
    //pegar todos os dados e gerar um XML
    public function gerarXML(){
        //buscar registros no banco de dados
        $dados = acessorio::all(); //equivale ao SELECT % FROM ACESSORIOS
        //print_f($dados);

        //retornar a view com os dados
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type','application/xml');
    }
}
