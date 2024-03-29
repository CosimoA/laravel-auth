@extends('layouts.app')
@section('content')

<div class="contenitore">
    <form action="{{route('project.store')}}" method="POST">
        @csrf
        @method ('POST')

        <label for="create_date">Create date: </label>
        <input type="date" id="create_date" name="create_date" required>

        <label for="name">Project name: </label>
        <input type="text" id="name" name="name" required>

        <label for="used_technologies">Used technologies: </label>
        <input type="text" id="used_technologies" name="used_technologies" required>

        <label for="status">Project status: </label>
        <select name="status" id="status">
            <option value="created">Created</option>
            <option value="work in progress">Work in progress</option>
            <option value="completed">Completed</option>
        </select>

        <button type="Submit">Create</button>
    </form>
</div>

@endsection