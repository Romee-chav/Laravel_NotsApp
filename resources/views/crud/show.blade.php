@extends('layouts.app')
@section('title', 'Show Data')
@section('content')
<div class="album py-5" style="height:120vh;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card border-success" style="max-width: 65rem;padding: 2%;">
            <h2> Details </h2>
            <hr>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label for="fname" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $crud->title }}"
                            disabled>
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" rows="3" name="content" placeholder="address"
                            required="" disabled>{{ $crud->content }}</textarea>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection