@extends('layouts.main-layout')

@section('title', 'Add new goods')
<div class="card-header">
    <a href="/">All goods</a>
    <a href="/category/add">Add category</a>
    <a href="/good/add">Add good</a>
</div>

@section('content')
    <div class="row featurette" style="padding-top: 156px;">
        <div class="col-md-7">
            <h1 class="featurette-heading">Add new good </h1>
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
            <form method="post" action="/good/add/check">
                @csrf
                <input type="string" name="title" id="title" placeholder="Enter here name of product " class="form-control"><br>
                <input type="string" name="slug" id="slug" placeholder="Enter here slug" class="form-control"><br>
                <input type="bigInteger" name="category_id" id="category_id" placeholder="Enter here category id" class="form-control"><br>
                <textarea name="short description" id="short description" placeholder="Enter here short description" class="form-control"></textarea><br>
                <textarea name="full description" id="full description" placeholder="Enter here full description" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-success">Add good</button>
            </form>
        </div>
    </div>
@endsection
