<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class regController extends Controller
{
    public function index(){
        return view('myAllCrud/registrations.index');
    }

    public function create(){
        return view('myAllCrud/registrations.create');
    }

}
