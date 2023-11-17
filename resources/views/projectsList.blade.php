@extends('layouts.main')
@section('content')

<div class="projectList">
    
    <div class="projectList-item border border-top-0 border-bottom-0 border-white rounded">
        <a class="projectLink" href="#">
                <img class="projectList-Item-img"/>
        
                <div  class="projectList-item-data">
                    <div class="projectList-item-title">Project name</div>
                    <div class="projectList-item-dascription"><footer class="blockquote-footer">Project decription</footer></div>
                    <div class="projectList-item-datatime">2007.10.07</div>
                    <div class="projectList-item-like"><i class="bi bi-star"> 3</i></div>
                    <br>
                </div>
                
        </a>
    </div>
    
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
@endsection