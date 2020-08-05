<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
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

    public function verDatos($id)
    { 
        $users = DB::table('users')->where('id', '=', $id)->get();
        return view('admin.ver');
    
    } 
}
