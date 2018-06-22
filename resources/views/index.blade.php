@extends('layouts.app')

@section('content') 

    <div class = "title">お前の名は・・・</div>
    <div class = "nickname"> {{$name_rand1}} {{$name_rand2}} {{$name_rand3}} </div>
    <div class="button">
        <a href="{{action('NicknameController@index')}}">復活</a>
    </div>
    <div class="button">
        <a href="{{action('NicknameController@history')}}">前世</a>
    </div>
    <footer>
        <ul>
            <a href="{{action('NicknameController@welcome')}}">
                <li class="fa fa-home" style="font-size:35px;color:white"></li>
            </a>
            <a href="http://twitter.com/?status=我が名は「{{$name_rand1}} {{$name_rand2}} {{$name_rand3}}...」">
                <li class="fa fa-twitter" style="font-size:35px;color:white"></li>
            </a>
        </ul>
@endsection