@extends('layouts.template')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>

   @include('partials.validations-errors')

    <form method="POST" action="{{ route('project.store') }}">
        
        @include('projects._form', ['btnText' => 'Guardar'])
    </form>
@endsection
