<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){ // with method used for data send
        $myName="BaBu";
        return view('contact')->with('name',$myName);
    }
    public function user(){  // compact used for data send
        $name="MD IMRAN HOSSAIN";
        $phone="234234";
        $address="Dhaka";
        $id="0909";

        return view('users',compact('name','phone','address'))->with('userId',$id);
    }
    public function about(){
        $name="MD IMRAN HOSSAIN";
        $address='';
        return view('about',compact('name','address'));
    }
    public function crud(){
        return view('myAllCrud.index');
    }




}
