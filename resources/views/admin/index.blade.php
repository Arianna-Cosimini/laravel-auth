@extends('layouts.app')

@section('content')
  
    <div class="container py-5">

        <h1 class="display-1 fw-bold text-uppercase text-center mb-5">Il mio portfolio</h1>
        <div class="row justify-content-center row-gap-5 mb-5" style="gap:20px">

            @foreach ($projects as $project)
                <div class="card" style=" width: calc(100% / 4 - 20px); min-height: 500px">
                    <img src="{{ $project->thumb }}" class="card-img-top" alt="..."
                        style="object-fit:cover; height: 254px;">
                    <div class="card-body  d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <span>{{ $project->code }}</span>
                        <span>{{ $project->link }}</span>

                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div id="button" class="d-flex justify-content-center">

            <a href="{{ route('projects.create') }}" class="btn btn-primary">Aggiungi progetto</a>
        </div>
    </div>
@endsection
