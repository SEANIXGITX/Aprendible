@extends('layouts.template')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('project.store') }}">
        {{ csrf_field() }}
        <label>
            Titulo del proyecto <br>
            <input type="text" name="title">
        </label>
        <br>
        <label>
            Url del proyecto <br>
            <input type="text" name="url">
        </label>
        <br>
        <label>
            Descripción del proyecto <br>
            <textarea name="description"></textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection