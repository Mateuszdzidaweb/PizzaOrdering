<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

//use App\Http\Requests;

class UserController extends Controller
{


    public function postSingup(Request $request){
        $this->validate($request, [
            'username' => 'min:3',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'password_confirm' => 'required|same:password'
        ]);

        $user = new User([
            'username' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'password_confirm' => bcrypt($request->input('password_confirm'))
            // bcrypt = usesd to encrypt the password in database.
        ]);
        $user->save();
//        Login user streight after registration process
        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function postSingin(Request $request){
        $this->validate($request,[
           'email' => 'email|required',
           'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
            return redirect()->back()->withErrors('Email or password is incorrect');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.singin');
    }


}
