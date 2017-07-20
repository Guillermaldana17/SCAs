<?php

namespace SCAs\Http\Controllers;

use Illuminate\Http\Request;


use SCAs\Http\Requests\UserCreateRequest;
use SCAs\Http\Requests\UserActualizarRequest;
use SCAs\Http\Controllers\Controller;
use SCAs\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{
    public function __construct(){

        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
        $this->middleware('auth');
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('Usuario'));

    }

    public function index()
    {
        $users = User::paginate(7);
    return view('usuario.index',compact('users'));


    }


    public function create()
    {
        return view('usuario.create');
    }


    public function store(UserCreateRequest $request)
    {
        User::create($request->all());

     Session::flash('message','Usuario Creado Correctamente');
            return Redirect::to('/Usuario');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {

        return view('Usuario.edit',['user'=> $this->user]);


    }


    public function update(UserActualizarRequest $request, $id)
    {
        $this->user ->fill($request->all());
        $this->user ->save();

            Session::flash('message','Usuario Editado Correctamente');
            return Redirect::to('/Usuario');
    }


    public function destroy($id)
    {
        $this->user->delete();

       Session::flash('message','Usuario Eliminado');
       return Redirect::to('/Usuario');
    }
}
