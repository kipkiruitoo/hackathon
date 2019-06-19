@extends('layouts.app')

@section('content')
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col"><Title></Title></th>
            <th scope="col">></a></th>
            <th scope="col"></a></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{route('categories.destroy', $category->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
                <a href="" class="btn success">
        </tbody>
</table>
@endsection