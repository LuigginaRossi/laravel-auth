@extends('layouts.app')

@section('content')
    {{-- riceve categories --}}
    {{-- creo la mia tabella --}}
            {{-- aggiungo bottone aggiungo categoria --}}
            <a href="{{route('admin.projects.create')}}">Create</a>
            {{-- <a href="{{route('admin.projects.edit')}}">Edit project</a> --}}
    <div class="container">
        
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card">
                        <img src="{{$project->cover_img}}" class="card-img-top" alt="...">
                        <div class="card-body pt-5">
                            <h5 class="card-title"> {{$project->title}}</h5>
                            <p class="card-text">{{Str::limit($project->description , 30)}}</p>
            
                            <div class="d-flex gap-3 pt-4">
                                {{-- redirect show.blade.php --}}
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
    
                                {{-- redirect edit.blade.php --}}
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pencil"></i>
                                </a>
    
                                {{-- delete-button --}}
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                    @csrf()
                                    @method('delete')
                    
                                    <button class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                                
    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </div>
    @endsection