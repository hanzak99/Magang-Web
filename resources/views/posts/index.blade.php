@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <div>
            <h3>All Post</h3>
            {{-- <hr> --}}
        </div>
        <div>
            <a href="posts/create" class="btn btn-primary">New Post</a>
        </div>
    </div>
    <div class="row">
            @foreach ($data as $post)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        {{$post->title}}
                    </div>
                    <div class="card-body">
                        <div>
                            {{Str::limit($post->body, 100,'')}}
                        </div>
                        <a href="/posts/{{$post->slug}}">Read More</a>
                    </div>
                    <div class="card-footer">
                        Published on {{ $post->created_at->diffForHumans()}}
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$data->links()}}
    </div>
</div>
@endsection
