<?php

namespace SCAs\Http\Controllers;

use Illuminate\Http\Request;
use SCAs\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use DB;
use SCAs\Models\Accesos;
use SCAs\Http\Requests;

use SCAs\Http\Controllers\Controller;

class logController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function store(LoginRequest $request){
    $ip = $request->ip();
    $now = new \DateTime();


    if(Auth::attempt(['email'=> $request['email'],'password'=>$request['password']]))
    {
        Accesos::create([
            'ip' => $request->ip(),
            'descripcion' => 'Correcto',
            'fecha_de_ingreso' => new \DateTime(),
            'email' => $request['email'],
        ]);
        return Redirect::to('accesos');




        /*DB::table('accesos')->insert(
            ['ip_ingresante' => $ip,
             'descripcion' => $desc,
                'fecha_de_ingreso' =>$now,
                'id_usuario' => $idu
            ]);
*/

    } else{
        Accesos::create([
            'ip' => $request->ip(),
            'descripcion' => 'Incorrecto',
            'fecha_de_ingreso' => new \DateTime(),
            'email' => $request['email'],
        ]);
        Session::flash('message-error', 'Los datos son incorrectos');
        return Redirect::to('/');
    }


}

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
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


    public function update(Request $request, $id)
    {
        //
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
    // Formas de obtener ip
    public function getRealIP()
    {

        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            return $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            return $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            return $_SERVER["HTTP_FORWARDED"];
        } else {
            return $_SERVER["REMOTE_ADDR"];
        }


    }
    public function saberIp(Request $request) {
        $request->ip();
    }
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
}
