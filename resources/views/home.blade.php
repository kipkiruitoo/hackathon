@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Great Places to School</h1>
        <p class="lead">Wlcome to great places to school</p>
        <hr class="my-4">
        <p>Please select all the categories you would like your school be nominated in</p>
        <div class="input-group">

        </div>
        <form action="{{url('/submit')}}" method="POST">
            @csrf
            @foreach ($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="options[]" value="{{$category->identifier}}"
                    id="{{$category->id}}">
                {{$category->name}}<br>
            </div>
            @endforeach


            <button type="submit" class="btn btn-primary">Next</button>
        </form>



    </div>
    @endsection
