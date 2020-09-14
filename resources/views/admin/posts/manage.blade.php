@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">Manage Blog</div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('deletepost',['id' => $post->id])}}" class='btn btn-danger'>Delete</a></td>
                    <td><a href="{{route('editpost',['id' => $post->id])}}" class='btn btn-primary'>Update</a></td>
                </tr>
            @endforeach
            </tbody>
            </table>

            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection