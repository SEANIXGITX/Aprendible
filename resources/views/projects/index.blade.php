@extends('layouts.template')

@section('title', 'Projects')

@section('content')
    <h1>{{ __('Projects') }}</h1>
    @auth
        <a href="{{ route('project.create') }}">Crear Proyecto</a>
    @endauth
    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('project.show', $project) }}">{{ $project->title }}</a> -
                {{ $project->created_at->diffForHumans() }} <br>
                <small>{{ $project->description }}</small>
            </li>
        @empty
            <li>No hay proyectos para mostar</li>
        @endforelse

        {{ $projects->links() }}

    </ul>
@endsection
