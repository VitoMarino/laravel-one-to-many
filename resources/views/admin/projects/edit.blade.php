@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mb-3" value="{{$project->name}}">
                        @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="activity">Activity</label>
                        <input type="text" name="activity" id="activity" class="form-control mb-3" value="{{$project->activity}}">
                        @error('activity')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="description" class="form-control mb-3" value="{{$project->description}}">
                        @error('description')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Image URL</label>
                        <input type="text" name="image" id="image" class="form-control mb-3" value="{{$project->image}}">
                        @error('image')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <input type="submit" value="Edit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
@endsection
