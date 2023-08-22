@extends('layouts.app')
@section('title', 'Edit Data')
@section('content')
    <div class="album py-5" style="height:120vh;">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card border-success" style="max-width: 65rem;padding: 2%;">
                <h2> Update Details </h2>
                <hr>
                <div class="card-body">
                    <form method="POST" action="{{ route('crud.update', ['crud' => $crud->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $crud->title }}">
                            </div>
                            <div class="row mb-3">
                            <div class="col">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" rows="3" name="content" placeholder="content">{{ $crud->content }}</textarea>
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" name="update" id="update" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
