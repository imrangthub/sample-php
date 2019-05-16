@extends('layouts.master')

@section('title', 'about | page')


@section('content')

    <h1 align="center">Blade template [view / about page ]</h1>

    <?php echo $name ?>  <!-- normal style --->
    <br/>
    {{--$name--}}  <!-- blade style -->
    {{"This is from blad"}}
    <br/>


    @if(!empty($address))
        {{$address}}
    @else
        {{'There is no Address'}}
    @endif


    <br/>
    {{ $address or "No address" }}

    <br/>

    @for($i=0; $i<=10; $i++)

        The value is: {{ $i }} <br/>
    @endfor


@endsection

 @section('footer')
     <h1 align="center">Footer</h1>
     @endsection
@section('footer_1')
    <h1>This is second footer</h1>
    @show

