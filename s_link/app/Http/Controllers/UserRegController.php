<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
//bd
use App\User;
use DB;
use Image;

use Closure;
use Session;

class UserRegController extends Controller
{
    public function create(){

    }

    public function store(Request $request)
    {
       
        $user = new User;
        $user->username=$request->get('username');
        $user->name=$request->get('name');
        $user->tipo='user';
        if($request){

        }
        /*if($request->hasFile('photo')){
            console.log('hola');
            $file = $data->file('foto');
            $name = time().$file->getClientOriginalName().'-'.$user->username;
            $user->photo ='/fotos_perfil/'.$name;
            $file->move(public_path().'/fotos_perfil/', $name);
            return "hola dentro";
        }*/
        $user->password = Hash::make($request->get('password'));
        //$user->save();
        //return "hola fuera";

         
    }
}
