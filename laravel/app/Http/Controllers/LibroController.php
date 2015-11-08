<?php

namespace Libreria\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use Libreria\Http\Requests;
use Libreria\Http\Requests\LibroCreateRequest;
use Libreria\Http\Requests\LibroUpdateRequest;
use Libreria\Http\Controllers\Controller;
use Libreria\Libro;
use Libreria\Categoria;
use Session;
use Redirect;


class LibroController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){

        $this->libro = Libro::find($route->getParameter('libro'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::Libros();
        return view('libro.index',compact('libros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::lists('c_nombre', 'id');
        return view('libro.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibroCreateRequest $request)
    {
        Libro::create($request->all());
        return redirect('/libro')->with('message','Libro Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $categorias = Categoria::lists('c_nombre', 'id');
        return view('libro.edit',['libro'=>$this->libro,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LibroUpdateRequest $request, $id)
    { 
        $this->libro->fill($request->all());
        $this->libro->save();
        Session::flash('message','Libro Editado Correctamente');
        return Redirect::to('/libro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::destroy($id);
        Session::flash('message','Libro Eliminado Correctamente');
        return Redirect::to('/libro');
    }
}
