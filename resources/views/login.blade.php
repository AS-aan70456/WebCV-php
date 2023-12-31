@extends('layouts.main')
@section('content')
<br>
<div class="text-center"><h1>Login</h1></div>
<div class="aut-container">
<form>

    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  <div class="text-center">
    <br>
    <br>
    <br>
    <br>
    You do not have an account? <a href="register">Register<a>
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
  <li class="nav-item">
    <a class="nav-link "  href="Account">Account</a>
  </li>
@endsection

