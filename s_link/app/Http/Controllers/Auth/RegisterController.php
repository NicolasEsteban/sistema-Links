<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
//use App\Images;
use DB;
use Image;
use File; 
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
/*
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;*/

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'photo'=> ['image','mimes:jpg,jpeg,png,gif,svg'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      
        $photo =null;
        if($data['photo']){

            
            $path = '/fotos_perfil/';
            $fileName = $data['username'].'-'.$data['name'].'.jpg';
            $file = $data['photo'];
            /*$file = Image::make($file)->encode('jpg',60);
            $file->resize(464, 218,function($constraint){
                $constraint->upsize();
            });*/
            
            $path = public_path('fotos_perfil/' . $fileName);
            Image::make($file->getRealPath())->resize(464,null,function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            $photo = '/fotos_perfil/'.$fileName;
            /*$name =  $data['username'].'-'.$data['name'].'.jpg';
            $image = $data['photo'];
            $image = Image::make($image)->resize(464, 218)->encode('jpg',60);
            $photo = '/fotos_egresados/'.$name;*/
            
            
            //$image->save($path);
            
            /*$file = $data['photo'];
            $imageName =  $data['username'].'-'.$data['name'].'.jpg';
            $image = Image::make($file)->encode('jpg',60);
            $image->resize(464, 218,function($constraint){
                $constraint->upsize();
            });
            $photo='/fotos_perfil/'.$imageName;
            $image->save('public/fotos_perfil/'.$imageName);
            Storage::disk('public')->put("fotos_perfil/$imageName",$image->stream());*/

        }
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'tipo' => 'user',
            'photo' => $photo,
            'password' => Hash::make($data['password']),
        ]);
    }
}
