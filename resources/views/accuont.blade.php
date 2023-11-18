@extends('layouts.main')
@section('content')
    This is only registered users
@endsection

@section('nav')
<li class="nav-item">
  <a class="nav-link "  href="home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link " href="projects">Projects</a>
</li>
<li class="nav-item">
  <a class="nav-link "  href="posts">Posts</a>
</li>

<li class="nav-item">
    <a class="nav-link "  href="about">AboutMe</a>
</li>
<li class="nav-item">
    <a class="nav-link "  href="CV">CV</a>
</li>
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="Account">Account</a>
</li>
@endsection