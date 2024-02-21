@extends('layouts.app')
@section('content')



<div class="contenitore">
    <div>
        <a href="{{ route('project.create') }}">
            <div class="butt">
                
            </div>
        </a>

    </div>

    <div class="card_container">
        @foreach ($projects as $project)
        <div class="card_head">
            <div class="card_info">
                <h2>{{$project->name}}</h2>
                <span class="technologies">{{$project->used_technologies}}</span>
                <span class="status">{{$project->status}}</span>

            <div>
                <a href="{{route('project.show', $project->id)}}">
                    DETAILS
                </a>
            </div>

            </div>
        </div>
        @endforeach     
    </div>


</div>
@endsection