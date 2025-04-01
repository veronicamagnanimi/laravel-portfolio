@extends('layouts.app')
@section('title', 'All projects')
@section('content')

<div class="container mt-4">
<div class="text-center my-3">
    <h1 class="text-center my-4">All Projects</h1>
        <a class="btn btn-primary" href="{{ route('projects.create') }}">Create</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Type</th> 
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td> {{ $project->title }}</td>
                    <td> {{ $project->author }}</td>
                    <td>{{ $project->type->name ?? 'No type assigned' }}</td> 
                    <td> {{ $project->description }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary btn-sm">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection