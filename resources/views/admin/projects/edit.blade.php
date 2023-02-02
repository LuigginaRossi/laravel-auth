@extends('layouts.app')

@section('content')
EDIT PROJECT
<A href="{{route('admin.projects.index')}}">Return index</A>
route 'admin.projects.index', $project->id
@endsection