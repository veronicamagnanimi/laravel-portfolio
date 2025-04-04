@extends('layouts.projects')
@section('title', 'Create Project')

@section('content')

<img src="{{ asset('storage/' . $project->image)}}" alt="{{$project->title}}">

    <div class="d-flex justify-content-center">
        <form action="{{ route('projects.store') }}" method="POST" class="w-50" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="author">Type</label>
                <select name="type_id" id="type_id" class="form-control" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3 d-flex flex-wrap">
                @foreach ($technologies as $technology)
                <div class="me-3">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}">
                    <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>


            <div class="form-group mt-3">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Create Project</button>
            </div>
        </form>
    </div>

@endsection