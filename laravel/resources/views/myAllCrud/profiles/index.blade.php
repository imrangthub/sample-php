@extends('myAllCrud.layout')

@section('title','Profiles | Home')

@section('content')

    <div id="outer">
        <div id="wrap">
            <div id="headermain">

                <h1 id="header">LARAVEL CRUD</h1>
                <h2 id="tagline">This is my first <b>LARAVEL</b><em> web application ...</em></h2>
            </div>

            <div id="hmenu">
                <div id="hnav">

                    <ul id="navlist">
                        <li><a href="{{ route('crudHome')}}">Home</a></li>
                        <li><a href="{{ route('bookHome') }}">Book</a></li>
                        <li><a href="{{ route('mobileHome')}}">Mobile</a></li>
                        <li><a href="{{route('registrationHome')}}">Registration</a></li>
                        <li><a href="{{ route('profileHome') }}">profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="MainBody">
        <h3 align="center"><b>Welcome to your Profile</b></h3>
        <hr/>

        <div style="padding: 20px">
            <h1>Here show your Profiles</h1>


        </div>


    </div>
@endsection


@section('footer')

    <div id="footer">
        <h4 align="center">This is footer</h4>
    </div>

@endsection








