@extends('layouts.main')

@section('title', 'Tools')

@section('content')
    
    <div class="container py-5">
        <div class="row row-cols-3">
            @foreach ($tools as $tool)
                <div class="col mb-3">
                    <div class="card d-flex">
                        <img src="" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection