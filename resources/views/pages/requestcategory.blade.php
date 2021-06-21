@extends('layouts.main-layout')

@section('title', 'Add new categories')
<div class="card-header">
    <a href="/">All goods</a>
    <a href="/category/add">Add category</a>
    <a href="/good/add">Add good</a>
</div>

@section('content')
    <div class="row featurette" style="padding-top: 156px;">
    <div class="col-md-7">
        <h1 class="featurette-heading">Add new category</h1>
        <br>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <form method="post" action="/category/add/check">
            @csrf
            <input type="string" name="title" id="title" placeholder="Enter here name of product " class="form-control"><br>
            <input type="string" name="slug" id="slug" placeholder="Enter here slug " class="form-control"><br>
            <button type="submit" class="btn btn-success">Add category</button>
        </form>
    </div>
</div>
@endsection
