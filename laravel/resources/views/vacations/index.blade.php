@extends('layout.app')


@section('title', 'Vacation Page')

@section('content')
<div class="container">
    <div class="voyages">
        @foreach($vacations as $vacation)
            <h1>{{$vacation->place}}</h1>
            <img src="{{$vacation->poster}}" alt="">
            <p>{{$vacation->price}}</p>
        @endforeach
    </div>
</div>
@endsection