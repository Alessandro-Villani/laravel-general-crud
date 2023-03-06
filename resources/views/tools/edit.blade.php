@extends('layouts.main')

@section('title', 'Modify Tool')

@section('content')
    <section id="modify-form">
        <div class="container">
            <h2>Modify Tool:</h2>
            @include('includes.form.tools-forms')
        </div>
    </section>
@endsection
