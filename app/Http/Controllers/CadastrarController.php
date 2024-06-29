<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessorio;

class CadastrarController extends Controller
{
    //Regra de negócio: validar e persistir dados
    public function salvar(Request $request){
        $request->validate([
            "tipoItem" => "required|min:4|max:100",
            "preco" => "required|decimal:2",
            "material" => "required|min:4|max:100",
            "cor" => "required|min:4|max:100",
            "tamanho" => "required|in:Pequeno,Medio,Grande",
        ],
        [
            "tipoItem.required" => "O campo deve ser preenchido com o nome do acessório", 
            "tipoItem.min" => "O campo deve ser preenchido com no mínimo 4 caracteres", 
            "tipoItem.max" => "O campo deve ser preenchido com no máximo 100 caracteres", 
            "preco.required" => "O campo deve ser preenchido com o preço do acessório", 
            "preco.required" => "O campo deve ter 2 casas decimais",
            "material.required" => "O campo deve ser preenchido com o material do acessório", 
            "material.min" => "O campo deve ser preenchido com no mínimo 4 caracteres", 
            "material.max" => "O campo deve ser preenchido com no máximo 100 caracteres", 
            "cor.required" => "O campo deve ser preenchido com a cor em destaque do acessório", 
            "cor.min" => "O campo deve ser preenchido com no mínimo 4 caracteres", 
            "cor.max" => "O campo deve ser preenchido com no máximo 100 caracteres", 
            "tamanho.required" => "O campo deve ser preenchido com o tamanho do acessório",
            "tamanho.in" => "O tamanho selecionado não é válido."
        ]);

        //dd($request);

        $acessorio = new Acessorio();
        $acessorio->fill($request->all());
        $acessorio->save();

        return view('cadastroSalvo');
    }
}
