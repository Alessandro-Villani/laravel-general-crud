@extends('layouts.main')

@section('title', 'Tools')

@section('content')
    <main id="tools">
        <div class="container py-5">
            <div class="row row-cols-3">
                @foreach ($tools as $tool)
                    <div class="col mb-3">
                        <a href='#' class="tool-card d-flex p-2">
                            <div class="col-3 me-3">
                                <img class="img-fluid" src="{{$tool->img_url}}" alt="{{$tool->name}}">
                            </div>
                                <div class="col-9 tool-data">
                                    <h4 class="mb-1">{{$tool->name}}</h4>
                                    <p class="category mb-0">{{ $tool->category }}</p>
                                    <div class="rating">
                                        @for ($i = 1; $i <= $count; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection