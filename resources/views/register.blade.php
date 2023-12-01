@extends('layout')
@section('title', 'Register')
@section('nav')
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
      <a class="navbar-brand px-5 text-white" href="{{'/'}}">@ TenFlix</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <span class="navbar-text">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{'login'}}" aria-current="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{'register'}}">Register</a>
            </li>
          </ul>
        </span>
    </div>
  </nav>

  
  <div class="container-fluid">
    <div class="d-flex justify-content-center pt-2 m-2 p-2">
      <div class="d-flex justify-content-center flex-column align-items-center" style="padding-top: 5% !important; background-color: #3d051b !important; color: white; width: 25% !important; height: 500px !important;">
        <img src="...">
        <br>
        <h5>Welcome to TenFlix!</h5>
        <p>Your Premier Destination</p>
        <p>for Exclusive Movie Transactions</p>
      </div>
      <div class="d-flex justify-content-center flex-column align-items-center" style="padding-top: 5% !important; background-color: white !important; color: black; width: 25% !important;">
        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
          </div>
        @endif

        @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">
             {{Session::get('error')}}
          </div>
        @endif
        <form action="{{route('register')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <br>
          <div class="form-group">
            <label for="formGroupExampleInput">Contact Number</label>
            <input type="text" name="contact" class="form-control" id="formGroupExampleInput" placeholder="Contact Number">
          </div>
          <br>
          <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder="Address">
          </div>
          <br>
          <div class="d-flex justify-content-end align-items-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection