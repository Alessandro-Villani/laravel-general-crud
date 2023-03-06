@extends('layouts.main')

@section ('title',"$tool->name")

@section('content')

<section id="dashboard">
<div class="container my-5">
    <h1>{{ $tool->name }}</h1>
    <div class="row row-cols-2 py-5">
        <div class="col">
           <img src="{{$tool->img_url}}" alt="{{$tool->name}}">
        </div>
        <div class="col">
            
         </div>
    </div>
</div>
</section>
@endsection