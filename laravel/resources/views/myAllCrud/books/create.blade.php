@extends('myAllCrud.layout')

@section('title','Book |create')

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
        <h3 align="center">Book create page</h3>
        <hr/><br/>
        <div style="width: 50%; height: 400px; margin: auto">

        <fieldset>
            <legend>add book</legend>



          <form action="/book_create" method="post">

              {{csrf_field()}}
              <table>
                  <tr>
                      <td>Book Name:</td>
                      <td><input type="text" name="title"/> </td>
                  </tr>
                  <tr>
                      <td>Authority: </td>
                      <td><input type="text" name="authority"/></td>
                  </tr>
                  <tr>
                      <td><input type="reset"/></td>
                      <td><input type="submit"/></td>
                  </tr>
              </table>

          </form>


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









