@extends('layouts.main')
@section('content')

<div class="artical">

  <div class="artical-data">{{$post->created_at}}</div>
  <div class="artical-title">{{$post->title}}</div>
  <div class="artical-subtitle"><footer class="blockquote-footer">{{$post->subtitle}}</footer></div>
  <div class="artical-likes">{{$post->likes}}</div>
  <div class="artical-category">{{$post->category_id}}</div>
  <div class="artical-context block">{{$post->content}}</div>

</div>

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