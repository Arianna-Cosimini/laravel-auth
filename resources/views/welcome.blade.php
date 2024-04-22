@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4rounded-3">
        <div class="container py-5">

            <div class="row justify-content-center row-gap-5 mb-5" style="gap:20px">
                <a href="{{ route('login') }}">
                    @foreach ($projects as $project)
                        <div class="card" style=" width: calc(100% / 4 - 20px); min-height: 500px">
                            <img src="{{ $project->thumb }}" class="card-img-top" alt="..."
                                style="object-fit:cover; height: 254px;">
                            <div class="card-body  d-flex flex-column justify-content-between">
                                <h5 class="card-title">{{ $project->name }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <span>{{ $project->code }}</span>
                                <span>{{ $project->link }}</span>

                                {{-- <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Visualizza</a> --}}
                            </div>
                        </div>

                </a>
                @endforeach
            </div>

            {{--         
        <h1 class="display-5 fw-bold">
            Benvenuto nel mio Portfolio
        </h1>

        <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects including laravel breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
        <a href="{{route('admin.index')}}" class="btn btn-primary btn-lg" type="button">Documentation</a> --}}
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi
                deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis
                accusamus dolores!</p>
        </div>
    </div>
@endsection
