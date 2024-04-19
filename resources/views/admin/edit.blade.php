@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Modifica il progetto</h1>


        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('name') ?? $project->name }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" rows="4">{{ old('description') ?? $project->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Linguaggio</label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code"
                    value="{{ old('code') ?? $project->code }}">
                @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="src" class="form-label">Indirizzo Git</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link"
                    name="link" value="{{ old('link') ?? $project->link }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>
@endsection
