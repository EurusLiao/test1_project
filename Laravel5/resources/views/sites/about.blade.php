@extends('app')
@section('content')
    <h1>YLP Characters</h1>
    <ul>
        @if(count($characters)>0)
        @foreach($characters as $chara)
            <li>
                {{$chara}}
            </li>
            @endforeach
            @endif
    </ul>
@stop
