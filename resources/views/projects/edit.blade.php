@extends('layouts.app')
@section('content')

<div class="contenitore">
    <form action="{{ route('comic.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $comic->title }}"><br><br> 

        <label for="price">Price:</label>
        <!-- Aggiunto il valore corrente del prezzo -->
        <input type="text" id="price" name="price" value="{{ $comic->price }}"><br><br> 

        <label for="description">Description:</label><br>
        <!-- Aggiunto il valore corrente della descrizione -->
        <textarea id="description" name="description">{{ $comic->description }}</textarea><br><br> 


        {{--  --}}
        <label for="create_date">Create date: </label>
        <input type="date" id="create_date" name="create_date" required value="{{ $project->create_date }}">

        <label for="name">Project name: </label>
        <input type="text" id="name" name="name" required value="{{ $project->name }}">

        <label for="used_technologies">Used technologies: </label>
        <input type="text" id="used_technologies" name="used_technologies" required value="{{ $project->used_technologies }}">

        <label for="status">Project status: </label>
        <select name="status" id="status">
            <option value="created">Created</option>
            <option value="work in progress">Work in progress</option>
            <option value="completed">Completed</option>
        </select>


        <label for="description">Description: </label>
        <input type="text" id="description" name="description" value="{{ $project->description }}">

        <label for="web">Website link: </label>
        <input type="text" id="web" name="web_site" value="{{ $project->web_site }}">

        <label for="image">Image link: </label>
        <input type="text" id="image" name="image_link" value="{{ $project->image_link }}">

        <label for="completed_date">Completed date: </label>
        <input type="date" id="completed_date" name="completed_date" value="{{ $project->completed_date }}">

        <button type="submit">Update Project</button>
    </form>
</div>

@endsection