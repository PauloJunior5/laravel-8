@extends('layouts.app2')

@section('title', 'Index')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <div class="row">
                <div class="col-lg-12 d-flex ">
                    <div class="mr-auto p-2">
                        <h2>Projetcts List</h2>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project">NEW</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Name</th>
                    <th>Introduction</th>
                    <th>Location</th>
                    <th>Cost</th>
                    <th>Date Created</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->introduction }}</td>
                        <td>{{ $project->location }}</td>
                        <td>{{ "US$" . $project->cost }}</td>
                        <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                        <td>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                <div class="d-flex justify-content-center">

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" class="btn btn-outline-primary" href="{{ route('projects.show', $project->id) }}" title="show">
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-eyeglasses" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 0-4 0 2 2 0 0 0 4 0z"/>
                                            </svg>
                                        </a>
                                        <a type="button" class="btn btn-outline-primary" href="{{ route('projects.edit', $project->id) }}" title="edit">
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-primary" title="delete">
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $projects->links() !!}

        </div>

    </div>
</div>

@endsection