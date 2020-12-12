@extends('layouts.app2')

@section('title', 'Edit')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <div class="row">
                <div class="col-lg-12 d-flex ">
                    <div class="mr-auto p-2">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('projects.index') }}" title="Go Back">Go Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr class="m-5">

            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="mb-3 col-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $project->name }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="number" name="cost" class="form-control" placeholder="Cost" value="{{ $project->cost }}" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $project->location }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="introduction">Introduction</label>
                        <textarea class="form-control" style="height:50px" name="introduction" placeholder="Introduction" required>{{ $project->introduction }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection