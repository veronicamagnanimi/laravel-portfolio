@extends('layouts.projects')
@section('title', $project->title)
@section('content')

<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4 text-center w-75 project-details">
        <h2 class="fw-bold">{{ $project->title }}</h2>
        <h5 class="fst-italic">By {{ $project->author }}</h5>
        <hr>
        <p>{{ $project->description }}</p>

        <section class="mt-4">
            <p class="lead">{{ $project->content }}</p>
        </section>
        <hr>
        <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Edit</a>

        <a href="{{ route('projects.index') }}" class="btn btn-primary btn-sm mt-5">Back to Projects</a>
    </div>
</div>
@endsection

