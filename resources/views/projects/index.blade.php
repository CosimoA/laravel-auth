@extends('layouts.app')
@section('content')



<div class="contenitore">
    <div>
        <a href="{{Route('project.create')}}">
            <div class="btn">
                +
            </div>
        </a>
    </div>

    <div class="card_container">
        @foreach ($projects as $project)
        <div class="card_head">
            <h2>{{$project->name}}</h2>
            <span>{{$project->used_technologies}}</span>
            <span>{{$project->status}}</span>
        </div>
        @endforeach
                 
    </div>


</div>
@endsection