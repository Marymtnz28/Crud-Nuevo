<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Articulo;
class ArticuloControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Traemos los datos de la tabla

        $articles = Article::all();
        return $articles;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creamos un nuevo articulo
         
         $article = new Article();
        
            $article->description=$request->description;
            $article->price=$request->price;
            $article->stock=$request->stock;
            $article->visibility=$request->visibility;
    
            $article->save();
       
       
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
    {
        //
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
       
        $articulo = Article::findOrFail($id); //Acá buscamos un articulo en especifico
        $articulo->description=$request->description;
        $articulo->price=$request->price;
        $articulo->stock=$request->stock;
        $articulo->visibility=$request->visibility;
        $articulo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        //
          
            $article= Article::destroy($request);
            return $articulos;
           
            }
        
        
    
        
    }