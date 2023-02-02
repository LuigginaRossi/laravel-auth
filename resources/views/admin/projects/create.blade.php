@extends('layouts.app')

@section('content')
    <div class="container">
        CREATE NEW PROJECT

        <h1>New Comic</h1>

        <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <A href="{{route('admin.projects.index')}}">Return index</A>
    </div>
@endsection