@extends('myAllCrud.layout')

@section('title','Reg |create')

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
        <h3 align="center">Registration create page</h3>
        <hr/><br/>
        <div style="width: 80%; height: 400px; margin: auto; padding:5px">
            <fieldset>
                <legend>add new Student</legend>

                <table>
                    <tr>
                        <td>Student Name:</td>
                        <td><input type="text" name="name"/> </td>
                    </tr>
                    <tr>
                        <td>Gender:</td><td>
                            <input type="radio" name="gender" value="Male">Male</br>
                            <input type="radio" name="gender" value="Female">Felame</br>
                        </td>
                    </tr>
                    <tr>
                        <td>Education:</td>
                        <td>
                            <select name="city">
                                <option value="S.S.C">S.S.C</option>
                                <option value="H.S.C">H.S.C</option>
                                <option value="GRADUATE">GRADUATE</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Course:</td>
                        <td>
                            <input type="checkbox" name="hobby[]" value="programming">Programming.
                            <input type="checkbox" name="hobby[]" value="networking">Networking.
                            <input type="checkbox" name="hobby[]" value="designing">Designing.
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email"/></td>
                    </tr>

                    <tr>
                    <tr>
                        <td>Photo: </td>
                        <td><input type="file" name="photo"/></td>
                    </tr>

                    <tr>
                        <td><input type="reset" value="RESET"/></td>
                        <td><input type="submit" value="SAVE"/></td>
                    </tr>
                </table>
            </fieldset>
        </div>

        <br/>

    </div>
@endsection


@section('footer')

    <div id="footer">
        <h4 align="center">This is footer</h4>
    </div>

@endsection









