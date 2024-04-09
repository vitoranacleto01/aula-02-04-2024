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
      try {
        $produto = Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
        ]);
        
      return response()->json($produto, 201); // 201: Created
    } catch (\Exception $e) {
      return response()->json(['error' => 'Erro ao criar produto: ' . $e->getMessage()], 500); // 500: Internal Server Error
    }
      //  $produto = Produto::create([
      //    'nome' => $request->nome,
      //    'valor' => $request->valor,
      //    'descrição' => $request->descricao,
      //  ]);

      //  return $produto;
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
