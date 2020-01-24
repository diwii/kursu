@extends('layouts.app')

@section('content')
    @foreach( $dishCategories as $category )
        <h1>{{ $category->name }}</h1>
        <ul>
            @foreach( $category->dishes as $dish )
            <li>{{ $dish->name }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection