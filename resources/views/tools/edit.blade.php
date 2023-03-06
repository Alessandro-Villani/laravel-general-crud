@extends('layouts.main')

@section('title', 'Modify Tool')

@section('content')
    <section id="modify-form">
        <div class="container py-3">
            <h2>Modify Tool:</h2>
            @include('includes.form.tools-forms')
        </div>
    </section>
@endsection
