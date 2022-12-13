<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserValidateController extends Controller
{
    public function index(){
        return view('Страница только для админа');
    }
}
