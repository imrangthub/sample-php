<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mobileController extends Controller
{

    public function index(){
        return view('myAllCrud/mobiles.index');
    }

    public function create(){
        return view('myAllCrud/mobiles.create');
    }

    public function store(Request $requestData){
        $allData=$requestData->all();
        return dd($allData);
    }




}
