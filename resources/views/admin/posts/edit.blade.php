@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">create blog post</div>
        <div class="card-body">
            <form action="{{route('updatepost',['id' => $post->id])}}" method='POST' enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="">Enter Post Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder='Enter Post Title'>
                </div>
                <div class="form-group">
                    <label for="">Enter Post Image</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Enter Post Body</label>
                    <textarea name="body" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Insert" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection