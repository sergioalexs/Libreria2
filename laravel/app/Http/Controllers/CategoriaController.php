<?php

namespace Libreria\Http\Controllers;

use Illuminate\Http\Request;

use Libreria\Http\Requests;
use Libreria\Http\Requests\CategoryCreateRequest;
use Libreria\Http\Requests\CategoryUpdateRequest;
use Libreria\Http\Controllers\Controller;

use Libreria\Categoria;
use Session;
use Redirect;
use Illuminate\Routing\Route;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $categorias = Categoria::paginate(7);
        return view('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        Categoria::create([
            'c_nombre' => $request['c_nombre'],
        ]);

      return redirect('/categoria')->with('message','Categoria Creada Correctamente');
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
        $categoria = Categoria::find($id);
        return view('categoria.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();
        Session::flash('message','Categoria Actualizada Correctamente');
        return Redirect::to('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        Session::flash('message','Categoria Eliminada Correctamente');
        return Redirect::to('/categoria');
    }
}
