@extends('layouts.template')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>

    <ul>
        @forelse ($projects as $project)
            <li><a href="{{route('project.show', $project)}}">{{ $project->title }}</a> - {{ $project->created_at->diffForHumans() }} <br>
            <small>{{ $project->description }}</small></li>
        @empty
            <li>No hay proyectos para mostar</li>
        @endforelse

        {{$projects->links()}}

    </ul>
@endsection
    