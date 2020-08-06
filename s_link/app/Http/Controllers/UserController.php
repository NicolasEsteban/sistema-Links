<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
//bd
use App\User;
use DB;

use Closure;
use Session;

class UserController extends Controller
{

    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->middleware('auth');
        $this->auth =$auth;
    }
    
    public function index()
    {
        
        if($this->auth->user()->tipo == 'admin'){
            $users = DB::table('users')->paginate(5);;
            
            return view('admin.index',['users' => $users]);
            
        }else{
            return view('users.index');
        }
        
    }

    public function show($id)
    { 
        $user = User::findOrFail($id);
        return view('admin.ver',['user'=>$user]);
    
    } 

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit',['user'=>$user]);
    }

    public function update(Request $request,$id)
    {
        $user =  User::findOrFail($id);
        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->tipo = $request->get('tipo');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return Redirect::to('users');

    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();    
        return Redirect::to('users');
        
    }
}
