@extends('layout.app') 

@section('content') 
<div class="text-center p-5">
    <h1>Questa è la home dell'Admin</h1>
    <a href="{{ route('comics.index')}}"><h4>Manage Table</h4></a>
</div>
@endsection 