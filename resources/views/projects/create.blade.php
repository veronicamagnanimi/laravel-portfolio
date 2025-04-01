@extends('layouts.projects')
@section('title', 'Create Project')

@section('content')

    <div class="d-flex justify-content-center">
        <form action="{{ route('projects.store') }}" method="POST" class="w-50">
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
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" required>
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