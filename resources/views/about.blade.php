@extends('layouts.main')
@section('content')

<blockquote class="blockquote text-center HomeTitle">
    <p class="mb-0">This is about me</p>
    <br>
    <div style="margin: 10px 150px;"><footer class="blockquote-footer">I am a back-end developer with many projects on GitHub. My main programming
        languages are c# c++, javascript, i can also program in java, python, php, c. In my
        work, I often had to create optimal software specifically adapted for computers with
        limited resources. I have experience in writing system architecture and maintaining
        Legacy code. I enjoy working with large code bases, analyzing existing code and
        improving it, ensuring the stability and functionality of the software product</footer></div>
  </blockquote>
  <blockquote class="blockquote text-center HomeTitle" style="margin: 0px; margin-top: 40px;">
     <a href="https://github.com/AS-aan70456/" type="button" class="btn btn-secondary btn-lg " style="margin-right: 25px;" disabled>MyGithab</a>
    <a type="button" class="btn btn-secondary btn-lg" disabled>Contact</a>
</blockquote>

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
    <a class="nav-link active" aria-current="page" href="about">AboutMe</a>
</li>
<li class="nav-item">
    <a class="nav-link "  href="CV">CV</a>
</li>
<li class="nav-item">
  <a class="nav-link "  href="Account">Account</a>
</li>
@endsection