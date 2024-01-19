@extends('layout.app') 

@section('content') 
<div class="container">
    <div class="buttons py-3 d-flex justify-content-between">
        <a href="{{ route('home')}}"><button class="btn btn-success my-2"><i class="fa-solid fa-circle-arrow-left"></i></button></a>
        <a href="{{ route('comics.create')}}"><button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i></button></a>

    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col"></th>
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
                    <td><a href="{{ route('comics.show', ['comic' => $comic_item->id])}}" class="btn btn-success"><i class="fa-solid fa-info"></i></a></td>
                    <td><a href="{{ route('comics.edit', ['comic' => $comic_item->id])}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a></td>
                    <td>
                        {{-- <form action="{{ route('comics.destroy', ['comic' => $comic_item->id])}}" method="POST"> --}}
                            {{-- @csrf
                            @method('DELETE') --}}
                            <a class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $comic_item->id }}"><i class="fa-solid fa-trash" id="toDelete"></i></a>
                        {{-- </form> --}}
                    </td>
                    @include('modals.delete')
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 