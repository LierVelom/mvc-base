@extends('frontend.layouts.app', ['title' => $article['title']]) 

@section('content')
    <h1 class="text-center mt-5">Show detail article</h1>
    <div class="article mt-5">
        <h5>Title: {{ $article['title'] }}</h5>
        <h5>Description: {{ $article['description'] }}</h5>
    </div>
@endsection
