@extends('layouts.app')
@section('title', 'Create Data')
@section('content')
<div class="album py-5" style="height:120vh;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card border-success" style="max-width: 65rem;padding: 2%;">
            <h2> Add Data </h2>
            <hr>
            <div class="card-body">
                @if (Session::has('error'))
                <p class="text-danger">{{ Session::get('error') }}</p>
                @endif
                <form method="POST" action="{{ route('crud.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" rows="3" name="content"
                                    placeholder="content"></textarea>
                                @if ($errors->has('content'))
                                <span class="text-danger">{{ $errors->first('content') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input type="submit" name="add" id="add" value="Add Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection