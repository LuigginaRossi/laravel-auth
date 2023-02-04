@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">


        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage', $project->cover_img)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$project->title}}</h5>
              <p class="card-text">{{$project->description}}</p>
              <a href="{{$project->github_link}}">
                <i class="fa-brands fa-github"></i>
              </a>
            </div>
          </div>
    {{-- @else
    <h1>INCOMING...</h1>
    @endif --}}
    
</div>
@endsection