<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('shop.index');
    }

    public function getSingup(){
        return view('user.singup');
    }

    public function getSingin(){
        return view('user.singin');
    }

    public function  getProfile(){
        return view ('user.profile');
    }

}
