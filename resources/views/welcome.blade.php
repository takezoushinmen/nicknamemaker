@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="logo">Nickname Maker</div>
    <div class="subtitle">
        <p>presented by Eternal Dragon.</p>
    </div>
    <div class="button">
        <a href="{{action('NicknameController@start')}}">Start</a>
    </div>    
</div>
<footer>
    <ul>
        <a href="http://twitter.com/?status=Eternal Dragonの神アプリ降臨　絶対面白いからやってみて！(*'▽')">
            <li class="fa fa-twitter" style="font-size:35px;color:white"></li>
        </a>
        <a href="https://ja-jp.facebook.com/login/">
            <li class="fa fa-facebook-square" style="font-size:35px;color:white"></li>
        </a>
        <a href="https://www.instagram.com/">
            <li class="fa fa-instagram" style="font-size:35px;color:white"></li>
        </a>
    </ul>
</footer>    
@endsection
