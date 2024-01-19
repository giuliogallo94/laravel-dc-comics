@extends('layout.app') 

@section('content') 
<div class="container">
    <div class="buttons py-3 d-flex justify-content-between">
        <a href="{{ route('comics.index')}}"><button class="btn btn-success my-2"><i class="fa-solid fa-circle-arrow-left"></i></button></a>

    </div>
   <h2 class="text-center">Create new comic</h2>

   <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" ></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>

        

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" name="type" id="type">
                        <option value="">Select</option>
                        <option value="graphic novel">Graphic novel</option>
                        <option value="comic book">Comic Book</option>
                    </select>
                </div>

                <button class="btn btn-success my-3">Submit</button>
            </form>
        </div>
   </div>
</div>
@endsection 