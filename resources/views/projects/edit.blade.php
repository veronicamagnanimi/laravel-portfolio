@extends('layouts.projects')
@section('title', 'Update Project')

@section('content')

    <div class="d-flex justify-content-center">
        <form action="{{ route('projects.update', $project) }}" method="POST" class="w-50">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ $project->author }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="author">Type</label>
                <select name="type_id" id="type_id" class="form-control" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group mt-3">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control"
                    value="{{ $project->description }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5"
                    required>{{ $project->content }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Create Project</button>
            </div>
        </form>
    </div>

@endsection