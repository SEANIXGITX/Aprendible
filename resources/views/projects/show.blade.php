@extends('layouts.template')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    @auth
        <a href="{{ route('project.edit', $project) }}">{{ __('Edit') }}</a>

        <form method="POST" action="{{ route('project.destroy', $project) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
