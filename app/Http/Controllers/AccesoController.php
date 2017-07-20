<?php

namespace SCAs\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SCAs\Models\Accesos;
use SCAs\Http\Requests;
use SCAs\Http\Controllers\Controller;

class AccesoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $accesoss = Accesos::paginate(8);
        $contar = DB::table('accesos')->count();
        $contarc = DB::table('accesos')->where('descripcion','=','correcto')->count();
        $contarinc = DB::table('accesos')->where ('descripcion','=','incorrecto')->count();
        return view('accesos.index', compact('accesoss','contar','contarc','contarinc'));

    }


    public function create()
    {

        }
    public function registroc(){


    }
    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
