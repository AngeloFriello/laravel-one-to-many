@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="img-container">
                <img src="{{$project->thumb}}" alt="">
            </div>
            <div>
                <ul>
                    <li><a href="{{route('projects.show', $project)}}">{{$project->name}}</a></li>
                    <li>{{$project->type}}</li>
                    <li>{{$project->bio}}</li>
                    <li>{{$project->admin}}</li>
                    <span><a href="{{route('projects.edit', $project)}}" class="btn btn-primary my-3">Edit</a></span>
                    <form action="{{route('projects.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Cancella" class="btn btn-primary">
                    </form>
                </ul>
            </div>
        </div>
    </div>

@endsection

