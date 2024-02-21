@extends('layouts.app')
@section('content')



<div class="contenitore">

    <div class="card_container">
        @foreach ($projects as $project)

        {{-- Card lato sinistro con le immagini  --}}
        <div class="card-right">
            <div>
                <img src="{{$project->image_link}}" alt="{{$project->name}}">
            </div>
        </div>

                {{-- Card lato destro con il testo --}}
        <div class="card-left">
            <a href="route{{'projects.index'}}">DELETE</a>
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
        @endforeach
                 
    </div>


</div>
@endsection