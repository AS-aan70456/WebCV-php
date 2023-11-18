@extends('layouts.main')
@section('content')

<div class="projectList">
    @foreach ($projects as $project)
        
    <div class="projectList-item border border-top-0 border-bottom-0 border-white rounded">
        <a class="projectLink" href="#">
                <img class="projectList-Item-img"/>
        
                <div  class="projectList-item-data">
                    <div class="projectList-item-title">{{$project->title}}</div>
                    <div class="projectList-item-dascription"><footer class="blockquote-footer">{{$project->subtitle}}</footer></div>
                    <div class="projectList-item-datatime">{{$project->created_at}}</div>
                    <div class="projectList-item-like"><i class="bi bi-star"> {{$project->likes}}</i></div>
                    <br>
                </div>
                
        </a>
    </div>
    @endforeach
</div>


@endsection




@section('nav')
<li class="nav-item">
  <a class="nav-link "  href="home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link active"aria-current="page" href="projects">Projects</a>
</li>
<li class="nav-item">
  <a class="nav-link "  href="posts">Posts</a>
</li>

<li class="nav-item">
    <a class="nav-link " href="about">AboutMe</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="CV">CV</a>
</li>
<li class="nav-item">
  <a class="nav-link "  href="Account">Account</a>
</li>
@endsection