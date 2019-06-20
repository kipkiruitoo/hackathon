@extends('layouts.app')
@section('content')

@foreach ($options as $item)
<div class="container">
<div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="http://localhost:8000/survey/form/{{$item}}"></iframe>
</div>
</div>

@endforeach
@endsection
