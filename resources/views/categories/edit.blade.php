@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3"></div>
    </div>
</div>
<form action="{{route('categories.update',  $category->id)}}" method="post">
        {{method_field('PUT')}}
    @csrf
    <div class="form-group">
      <label for="categoryname">Category name</label>
      <input type="text" name="title"  value="{{$category->title}}" class="form-control" id="categoryname"  placeholder="Enter the category name">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        
        <input type="submit" class="btn" id="submit"  value="save">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
</form>
@endsection