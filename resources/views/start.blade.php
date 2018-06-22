@extends('layouts.app')

@section('content')
    <div class="title">お前の名は・・・</div>
    <div class="nickname">　</div>
    <div class="button">
        <a href="{{action('NicknameController@index')}}">誕生</a>
    </div>
@endsection