@extends('layouts.app')
@section('content')



<div class="contenitore">

    <div class="card_container">

        {{-- Card lato sinistro con le immagini  --}}
        <div class="card-right">
            <div>
                <img src="{{$project->image_link}}" alt="{{$project->name}}">
            </div>
        </div>

                {{-- Card lato destro con il testo --}}
        <div class="card-left">
            {{-- <a href="route{{'projects.index'}}">DELETE</a> --}}
            <h2>{{$project->name}}</h2>
            <div>{{$project->description}}</div>
            <div>{{$project->web_site}}</div>
            <div>{{$project->used_technologies}}</div>

            <div class="timeline"> 
                <span>{{$project->status}}</span>
                <span>{{$project->create_date}}</span>
                <span>{{$project->start_date}}</span>
                <span>{{$project->completed_date}}</span>
            </div>
        </div>
        @auth
            <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <form action="{{ route('project.edit', $project->id) }}">
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        @endauth

        
    </div>


</div>
@endsection