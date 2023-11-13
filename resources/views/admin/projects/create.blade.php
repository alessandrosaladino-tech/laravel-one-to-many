@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('New Project') }} 
        </h2>

        <div class="row justify-content-center my-3">
            <div class="col">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Title</strong></label>

                        <input type="text" class="form-control" name="title" id="title"
                            aria-describedby="helpTitle" placeholder="New project Title">

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label for="description" class="form-label"><strong>Description</strong></label>

                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpTitle" placeholder="New project Description">

                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="gitLink" class="form-label"><strong>Git Hub Project Link</strong></label>
                        <input type="text" class="form-control" name="github_link" id="github_link" aria-describedby="helpGitlink"
                            placeholder="Insert a git link for the project" value="{{ old('github_link') }}">
                    </div>

                    <div class="mb-3">
                        <label for="public_link" class="form-label"><strong>Public link</strong></label>
                        <input type="text" class="form-control" name="public_link" id="public_link"
                            aria-describedby="helppublicLink" placeholder="Insert an Public link "
                            value="{{ old('public_link') }}">
                    </div>

                    <div class="mb-3">

                        <label for="type" class="form-label"><strong>Project Type</strong></label>

                        <input type="text" class="form-control" name="type" id="type"
                            aria-describedby="helpTitle" placeholder="Type of the project (Es. HTML, JavaScript, ecc.)">

                        @error('tech')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="release_date" class="form-label"><strong>Release Date</strong></label>

                        <input type="text" class="form-control" name="release_date" id="release_date"
                            aria-describedby="helpTitle" placeholder="Type the release Date">

                        @error('tech')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="thumb" class="form-label"><strong>Choose a Thumbnail image file</strong></label>

                        <input type="file" class="form-control" name="thumb" id="thumb"
                            placeholder="Upload a new image file..." aria-describedby="fileHelpThumb">

                        @error('thumb')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-success my-3">SAVE</button>
                    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">CANCEL</a>

                </form>
            </div>
        </div>

    </div>
@endsection