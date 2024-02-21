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
        <div class="card_head">
            <h2></h2>
            <span></span>
            <span></span>   
        </div>
        <div class="card_head">
            <h2></h2>
            <span></span>
            <span></span>   
        </div>
        <div class="card_head">
            <h2></h2>
            <span></span>
            <span></span>   
        </div>
        <div class="card_head">
            <h2></h2>
            <span></span>
            <span></span>   
        </div>
    </div>
</div>
@endsection