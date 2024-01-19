@extends('layout.app') 

@section('content') 
<div class="container ">
    <div class="buttons d-flex align-items-center justify-content-between">
        <a href="{{ route('comics.index')}}"><button class="btn btn-success my-2">Go back</button></a>
        <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

    </div>

   <div class="card show_card p-4 d-flex align-items-center gap-4 text-center">
        
    <div class="d-flex flex-column">
        <h4 class="m-0">{{$comic->title}}</h4>
        <p class="m-0">{{$comic->type}}</p>
        <span>(Series: {{$comic->series}})</span>
        <span>{{$comic->sale_date}}</span>
    </div>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->description}}</p>
    <div class="price">
        <span>{{$comic->price}}</span>
    </div>
   </div>
</div>
@endsection 