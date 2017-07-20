<?php

namespace SCAs\Http\Controllers;

use Illuminate\Http\Request;

use SCAs\Http\Requests;
use SCAs\Http\Controllers\Controller;

class ScasController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => 'admin']);
    }
    public function index()
    {
        return view('index');
    }

    public function admin(){
        return view('admin.index');
    }


}
