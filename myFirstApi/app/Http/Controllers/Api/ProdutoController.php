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
         'descrição' => $request->descrição,
       ]);

       return $produto;
    }

    public function update($id_produto, Request $request)
    {
      $produto = Produto::find($id_produto);

      if(!$produto) {
        return response()-> json("Produto não encontrado");
      }
      

      return response()->json($produto);
    }

    public function delete($id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->delete();

        return $produto;
        
    }
}
