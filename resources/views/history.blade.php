@extends('layouts.app')
@section('content')

    <ul>
        <a href="{{action('NicknameController@welcome')}}">
            <li class="fa fa-home" style="font-size:35px;color:white"></li>
        </a>
    </ul>
@foreach($items as $item)
    <li>
        <div class="history">
            <div class="timestamp">
                {{$item->created_at}}
            </div>    
                {{$item->nickname}}
        <div>
    </li>
@endforeach
    <ul>
        <a href="{{action('NicknameController@welcome')}}">
            <li class="fa fa-home" style="font-size:35px;color:white"></li>
        </a>
    </ul>
@endsection