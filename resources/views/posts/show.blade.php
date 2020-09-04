@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
    </div>
</div>
@endsection
