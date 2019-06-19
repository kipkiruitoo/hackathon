@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="{{route('categories.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="categoryname">Category name</label>
      <input type="text" name="title" class="form-control" id="categoryname"  placeholder="Enter the category name">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        
        <input type="submit" class="btn float-md-center btn-primary" id="submit"  value="save">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
</form>
        </div>
    </div>
</div>

@endsection