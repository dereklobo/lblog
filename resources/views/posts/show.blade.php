@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <h1>{{$post->title}}</h1>
    {{$post->body}}

    <hr>
    <div class="comments">
        <ul class="list-group">
        @if(count($post))
            @foreach($post->comments as $comment)
            <li class="list-group-item">
            <strong>
            {{$post->created_at->diffForHumans()}}: &nbsp;
            </strong>
                {{$comment->body}}
            </li>
            @endforeach
            @endif
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body"  class="form-control" placeholder="Your Comment here.."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            @include('layouts.errors')
        </div>
    </div>
</div>


@endsection