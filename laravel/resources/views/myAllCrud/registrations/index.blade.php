@extends('myAllCrud.layout')

@section('title','Registration | Home')

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
        <h3 align="center"><b>Welcome to Registration</b></h3>
        <hr/>
        <div style="width: 80%; margin: auto;">
            <h4 align="center">Registration list will show here</h4>
            <table width="100%">
                <tr>
                    <td>Serial No</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Education</td>
                    <td>Course</td>
                    <td>Email</td>
                    <td>Photo</td>
                    <td>Action</td>

                </tr>
            </table>
        </div>
        <br/>


        <div style="padding: 20px">
            <a href="{{route('reg_create')}}">Registration now?</a>


        </div>


    </div>
@endsection


@section('footer')

    <div id="footer">
        <h4 align="center">This is footer</h4>
    </div>

@endsection








