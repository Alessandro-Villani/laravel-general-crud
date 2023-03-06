@extends('layouts.main')
@section('content')
<section id="trash">
    <div class="container pt-5">
        <div class="card text-dark mt-5">
            <h1 class="pt-5 text-center">Trash</h1>
            <ul class="p-3">
            @foreach($tools as $tool)
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 m-3">
                    {{ $tool->name }}
                    <form action="{{ route('tools.trash.restore', $tool->id) }}" method="POST">
                        @csrf 
                        @method('PATCH')
                        <button class="btn btn-primary" type="submit">Restore</button>
                    </form>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection