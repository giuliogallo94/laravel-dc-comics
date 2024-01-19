@extends('layout.app') 

@section('content') 
<div class="container">

    <a href="{{ route('comics.create')}}">Create new comic</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic as $comic_item)   
                <tr>
                    <th scope="row">{{$comic_item->id}}</th>
                    <td>{{$comic_item->title}}</td>
                    <td>{{$comic_item->series}}</td>
                    <td>{{$comic_item->type}}</td>
                    <td><a href="{{ route('comics.show', ['comic' => $comic_item->id])}}" class="btn btn-success">Details</a></td>
                    <td><a href="{{ route('comics.edit', ['comic' => $comic_item->id])}}" class="btn btn-primary">Edit</a></td>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 