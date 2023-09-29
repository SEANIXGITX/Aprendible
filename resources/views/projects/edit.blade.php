@extends('layouts.template')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.validations-errors')

    <form method="POST" action="{{ route('project.update', $project) }}">
        {{ method_field('PUT') }}

        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>
@endsection
