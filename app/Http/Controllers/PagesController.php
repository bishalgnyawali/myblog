<?php
/**
 * Created by PhpStorm.
 * User: bisha
 * Date: 18/02/2017
 * Time: 12:45 PM
 */
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Post;


Class PagesController extends Controller{
    public function getIndex(){
        return view('welcome');
    }
    public function getLogout()
    {
        //
        Auth::logout();
        return redirect()->route('welcome');
    }
    public function getAbout(){
        return view('layouts/about');
    }
    public function getContact(){
        return view('layouts/contact');
    }
    public function getUserPage(){

        $posts=Post::orderBy('created_at', 'desc')->get();
       // if(Auth::user()==$posts->user())
            return view('userpage',['posts'=>$posts]);
        //return redirect()->back();

    }
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);
        return $this->getUserPage();
        //return view('userpage');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            //return redirect()->route('userpage');//
            return redirect()->route('userpage');
        }
        return view('welcome');
    }




}