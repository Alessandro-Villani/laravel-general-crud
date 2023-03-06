@extends('layouts.main')

@section ('title',"$tool->name")

@section('content')

<section id="dashboard">
<div class="container my-5">
    <h1>{{ $tool->name }}</h1>
    <div class="row row-cols-2 py-5 border border-primary rounded">
        <div class="col d-flex justify-content-center my-5">
           <img src="{{$tool->img_url}}" alt="{{$tool->name}}">
        </div>
        <div class="col d-flex justify-content-center flex-column">
             <div><strong>Category:  </strong>  {{$tool->category}} </div>
             <div><strong>Release Year:  </strong> {{$tool->release_year}} </div>
             <div><strong>Latest Version:  </strong>  {{$tool->latest_version}} </div>
             <div><strong>Download Link:  </strong>  {{$tool->download_link}} </div>
             <div><strong>Operating Systems:  </strong>
                <ul>
                    @foreach ($tool->supported_os as $os)
                        <li>  {{$os}} </li>
                    @endforeach
                </ul>
              </div>
              <div><strong>Voto:  </strong>  {{$tool->vote}} </div>
              <div><strong>Description: </strong>
                <p>  {{$tool->description}}</p>
             </div>

         </div>

         
    </div>

    <div class="d-flex justify-content-between my-5">

        <a href="{{ route('tools.index')}}" class="btn btn-warning">Back</a>
        <div class="crud-controller d-flex">

            <a href="{{ route('tools.edit',$tool->id)}}" class="btn btn-success me-2">Edit</a>
            <form action="{{ route('tools.destroy',$tool->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>    
            </form>
        </div>
    </div>
</div>
</section>
@endsection