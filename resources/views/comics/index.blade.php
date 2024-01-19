@extends('layout.app') 

@section('content') 
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)   
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td><a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-success">Details</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 