@extends('layout.app') 

@section('content') 
        @foreach ($comics as $comic)
            <div>
                <ul>
                    <li>
                        {{ $comic->title}}
                    </li>
                </ul>
            </div>
@endforeach
@endsection 