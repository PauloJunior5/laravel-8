@extends('layouts.app2')

@section('title', 'Show')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <div class="row">
                <div class="col-lg-12 d-flex ">
                    <div class="mr-auto p-2">
                        <h2>Show Project</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('projects.index') }}" title="Go Back">Go Back</a>
                    </div>
                </div>
            </div>

            <hr class="m-5">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $project->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Introduction:</strong>
                        {{ $project->introduction }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Location:</strong>
                        {{ $project->location }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cost:</strong>
                        {{ $project->cost }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date Created:</strong>
                        {{ date_format($project->created_at, 'jS M Y') }}
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection