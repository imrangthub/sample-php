@extends('myAllCrud.layout')

@section('title','Book | Home')

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
        <h3 align="center"><b>Welcome to Book</b></h3>
        <hr/>

        <div style="padding: 20px">
            <a href="{{ route('book_create') }}">add new book</a>

        </div>



        <div >
            @if(isset($book) && $book != null)

                <table style="width: 50%; margin: auto; border: solid">
                    <tr>
                        <td>Serial No</td><td>Title</td><td>Writer</td><td>Action</td>
                    </tr>

                    <?php $serial=1; ?>
            @foreach($book as $singleBook)
                    <tr>
                       <td>{{$serial++ }}</td> <td>{{ $singleBook->title }}</td><td>{{ $singleBook->authority }}</td><td><a href="/book_edit/{{$singleBook->id}}"> Edit </a></td>
                    </tr>

            {{--<p>{{ $bk->title }}</p>--}}
                    {{--<p>{{ $bk->authority }}</p>--}}

            @endforeach
                </table>

            @endif
        </div>

    </div>
@endsection


@section('footer')

    <div id="footer">
        <h4 align="center">This is footer</h4>
    </div>

@endsection








