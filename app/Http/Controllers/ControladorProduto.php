<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\id;
use App\Models\Produto;
use App\Models\Categoria; 
class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Produto::all();
        $cats = Categoria::all();
    
        return view('produto', compact('pros', 'cats'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats= Categoria::all();
        return view('novoproduto', compact('cats'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Produto();
        $pro -> nome = $request->input('nome');
        $pro -> preco = $request->input('preco');
        $pro -> estoque = $request->input('estoque');
        $pro -> categoria_id = $request->input('id');
        $pro -> save();

        return redirect('produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $cats= Categoria::all();
        $pro = Produto::where('id', $id)->first();
        return view('editar-produto', compact('pro', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');
        $preco = $request->input('preco');
        $estoque = $request->input('estoque');
        $categoria_id = $request->input('categoria_id');
        Produto::where('id', $id)->update(['nome'=>$nome, 'preco'=>$preco, 'estoque'=>$estoque, 'categoria_id'=>$categoria_id]);

        return redirect('produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
