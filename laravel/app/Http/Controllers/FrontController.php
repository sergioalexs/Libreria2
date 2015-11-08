<?php namespace Libreria\Http\Controllers;

use Libreria\Http\Requests;
use Libreria\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Libreria\Libro;

class FrontController extends Controller {

	
public function __construct(){
    $this->middleware('auth',['only' => 'admin']);
  }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$libros = Libro::Libros();
      return view('index',compact('libros'));
		
	}



    public function contacto()
	{
		//
		return view('contacto');
	}

  
    public function admin()
	{
		//
		return view('admin.index');
	}

   public function reviews()
	{
		//

		$libros = Libro::paginate(5);
      return view('reviews',compact('libros'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
