@extends('layouts.app')
@section('content')



<div class="contenitore">
    <div>
        @auth
            <a href="{{ route('projects.create') }}">
                <div class="butt">
                    
                </div>
            </a> 
        @endauth
    </div>

    <div class="card_container">
        @foreach ($projects as $project)
            <div class="card_head" style="
                @if ($project->image_link)
                    background-image: url('{{ $project->image_link }}');
                @endif">
                <a href="{{ route('project.show', $project->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="card_info" style="padding: 1em;">
                        <h2>{{ $project->name }}</h2>
                        <span class="technologies">{{ $project->used_technologies }}</span>
                        <span class="status">{{ $project->status }}</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    


</div>
@endsection