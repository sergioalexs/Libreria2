<?php 
namespace Libreria\Http\Controllers;

use Illuminate\Http\Request;
use Libreria\Http\Requests;
use Libreria\Http\Requests\UserCreateRequest;
use Libreria\Http\Requests\UserUpdateRequest;
use Libreria\Http\Controllers\Controller;
use Libreria\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;



class UsuarioController extends Controller {

	
 public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(7);
        return view('usuario.index',compact('users'));

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	  return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
	
     User::create([
            'name' => $request['name'],
           'email' => $request['email'],
           'password' => bcrypt($request['password']),
        ]);

      return redirect('/usuario')->with('message','Usuario Creado Correctamente');

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
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/usuario');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		

		User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
	}

}
