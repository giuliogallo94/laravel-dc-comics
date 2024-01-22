@extends('layout.app') 

@section('content') 
<div class="container">

        <a href="{{ route('comics.index')}}"><button class="btn btn-success my-2"><i class="fa-solid fa-circle-arrow-left"></i></button></a>
   
    
   <h2 class="text-center">Edit comics</h2>

   <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('comics.update', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control">{{$comic->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}"> 
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>

        

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" name="type" id="type">
                        <option value="">Select</option>
                        <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic novel</option>
                        <option @selected($comic->type === 'comic book')  value="comic book">Comic Book</option>
                    </select>
                </div>

                <button class="btn btn-success mb-2">Submit</button>
            </form>
        </div>
   </div>
</div>
@endsection 