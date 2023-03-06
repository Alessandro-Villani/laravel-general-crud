@extends('layouts.main')

@section('title', 'Add New Tool')

@section('content')
    <section id="create-form">

        <div class="container">
            <h2>Create Tool:</h2>
            @include('includes.form.tools-forms')
        </div>
    </section>
@endsection
