@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>{{$project->type->name}}</h2>
                <h2>{{ $project->name }}</h2>
                <h2>{{ $project->activity }}</h2>
                <h2>{{ $project->description }}</h2>
                <h2>{{ $project->date }}</h2>
                <img src="{{$project->image}}" alt="{{$project->activity}}">
            </div>
        </div>
    </div>
@endsection
