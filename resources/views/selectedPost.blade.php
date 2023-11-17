@extends('layouts.main')
@section('content')
<blockquote class="blockquote text-center HomeTitle">
    <p class="mb-0">{{$post->title}}</p>
    <br>
    <div style="margin: 10px 150px;"><footer class="blockquote-footer">{{$post->subtitle}}</footer></div>
  </blockquote>

@endsection





@section('nav')
<li class="nav-item">
  <a class="nav-link"  href="home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="projects">Projects</a>
</li>
<li class="nav-item">
  <a class="nav-link " href="posts">Posts</a>
</li>

<li class="nav-item">
    <a class="nav-link " href="about">AboutMe</a>
</li>
<li class="nav-item">
    <a class="nav-link " href="CV">CV</a>
</li>
@endsection