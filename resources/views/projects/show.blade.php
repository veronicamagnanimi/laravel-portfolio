@extends('layouts.projects')
@section('title', $project->title)
@section('content')

    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow-lg p-4 text-center w-75 project-details">
            <h2 class="fw-bold">{{ $project->title }}</h2>
            <h5 class="fst-italic">By {{ $project->author }}</h5>
            <p>Type: {{ $project->type->name ?? 'No type assigned' }}</p>
            <!-- many to many -->
            @forelse($project->technologies as $technology)
            <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>
            @empty
            <p>No technologies assegned</p>
            @endforelse
            <hr>
            <p>{{ $project->description }}</p>

            <section class="mt-4">
                <p class="lead">{{ $project->content }}</p>
            </section>
            <hr>
            <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Edit</a>
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>


            <a href="{{ route('projects.index') }}" class="btn btn-primary btn-sm mt-5">Back to Projects</a>
        </div>
    </div>


    <!-- modale delete -->
    <div class="modal" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this project?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        <input type="submit" class="btn btn-danger" value="Delete">                       
                         @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection