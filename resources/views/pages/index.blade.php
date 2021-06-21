@extends('layouts.main-layout')

@section('title')
    <div class="card-header">
        <a href="/">All goods</a>
        <a href="/category/add">Add category</a>
        <a href="/good/add">Add good</a>
    </div>

@section('content')
    @include('includes.categories')
    @foreach($goods as $good)
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{route('getGoodsByCategory', $good->category['slug'])}}">{{$good->category['title']}}</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$good->title}}</h5>
                <p class="card-text">{{$good->description}}</p>
                <a href="{{route('getGood', [$good->category['slug'], $good->slug])}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
