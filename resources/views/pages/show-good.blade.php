@extends('layouts.main-layout')

@section('title', $good->title)
<div class="card-header">
    <a href="/">All goods</a>
    <a href="/category/add">Add category</a>
    <a href="/good/add">Add good</a>
</div>
@section('content')
    @include('includes.categories')
    <article>
        {!! $good->full_description !!}
    </article>

@endsection
