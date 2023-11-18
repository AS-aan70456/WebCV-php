@extends('layouts.main')
@section('content')
<div class="PostList d-flex flex-wrap">
    @foreach($posts as $post)
        <div class="border border-top-0 border-bottom-0 border-white rounded PostList-Item">
            <a class="projectLink" href="post?id={{$post->id}}">
            <img class="PostList-Item-img"/>
                <div class="PostList-Item-data">
                <div class="PostList-Item-title">{{$post->title}}</div>
                <div class="PostList-Item-description"><footer class="blockquote-footer">{{$post->subtitle}}</footer></div>
                <div class="PostList-Item-datatime">{{$post->created_at}}</div>
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
  <a class="nav-link " href="projects">Projects</a>
</li>
<li class="nav-item">
  <a class="nav-link active"aria-current="page"  href="posts">Posts</a>
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