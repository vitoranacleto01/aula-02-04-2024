<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function index()
    {
        $produtos = Produto::all();
    
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
       $produto = Produto::create([
         'nome' => $request->nome,
         'valor' => $request->valor,
         'descricao' => $request->descricao,
       ]);

       return $produto;
    }

    public function update($id, Request $request)
    {
      $produto = Produto::find($id);

      if(!$produto) {
        return response()-> json("Usuário não encontrado");
      }
      

      return response()->json($produto);
    }

    public function delete($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return $produto;
        
    }
}
