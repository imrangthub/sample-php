<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class profileController extends Controller
{
    public function index(){
        return view('myAllCrud/profiles.index');
    }


}
