@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-9">
    <div class="jumbotron">
    <h1 class="display-4">{{$company->name}}</h1>
    
    <p>{{$company->description}}</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
    @foreach($company->projects as $project)
    <div class="col mb-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$project->name}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a class="btn btn-primary" href="/projects/{{$project->id}}">view project</a>
        </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
<div class="col-md-3">
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/companies/{{$company->id}}/edit/">edit</a></li>
            <li><a href="#">view</a></li>
            <li><a href="#">delete</a></li>
            
        </ol>
    </div>
</div>
</div>


@endsection