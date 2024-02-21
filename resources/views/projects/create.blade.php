@extends('layouts.app')
@section('content')

<div class="contenitore">
    <form action="#" method="POST">
        @csrf

        <label for="create_date">Create date: </label>
        <input type="date" id="create_date" name="create_date">

        <label for="title">Project name: </label>
        <input type="text" id="title" name="title">

        <label for="technology">Used technologies: </label>
        <input type="text" id="technology" name="technology">

        <label for="status">Project status: </label>
        <select name="status" id="status">
            <option value="created">Created</option>
            <option value="work in progress">Work in progress</option>
            <option value="completed">Completed</option>
        </select>

        <label for="description">Description: </label>
        <input type="text" id="description" name="description">

        <label for="web">Website link: </label>
        <input type="text" id="web" name="web" >

        <label for="image">Image link: </label>
        <input type="text" id="image" name="image">

        <label for="completed_date">Completed date: </label>
        <input type="date" id="completed_date" name="completed_date">

        <button type="Submit">Create</button>
    </form>
</div>

@endsection