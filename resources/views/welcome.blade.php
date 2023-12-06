@extends('layout')
@section('title', 'Movie Website')
@section('nav')
<nav class="navbar navbar-expand-lg text-white" style="background-color: #3d051b !important;">
  <div class="container-fluid">
      <a class="navbar-brand px-5 text-white" href="{{'/'}}"><img src="/images/1.png" style="width: 7rem !important; height: 1.5rem !important;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <span class="navbar-text">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{'login'}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{'register'}}">Register</a>
            </li>
          </ul>
        </span>
    </div>
  </nav>
@endsection

@section('content')
<div class="container-fluid bg-dark-subtle" style="height: 300px !important; background-image: url('/images/coverphoto.png') !important; object-fit:cover; opacity: 0.8;">
    <div class="d-flex flex-column mb-3" style="color: white;">
      <div class="d-flex justify-content-center pt-5">
        <h1>Premier Movie Hub</h1>
      </div>
      <div class="d-flex justify-content-center pt-2">
        <p>Discover the Top 10 Premier Films and Seamlessly</p>
      </div>
      <div class="d-flex justify-content-center">
        <p>Secure Your Favorites</p>
      </div>
    </div>
  </div>
  <div class="container-fluid overflow-hidden">
    <div class="d-flex flex-column mx-4 my-2">
      <div class="d-flex justify-content-start pt-2">
        <h4>Top Selling</h4>
      </div>  
      <div class="d-flex justify-content-start">
        <p>Most popular as of 2023</p>
      </div>
    </div>
  </div>
  <div class="container text-center pb-5  ">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/barbie.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Barbie (2023)</h5>
              <p>2023 · 1h 54m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/mario.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Mario (2023)</h5>
              <p>2023 · 1h 32m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/Oppenheimer.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Oppenheimer (2023)</h5>
              <p>2023 · 3h</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/FastX.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Fast X (2023)</h5>
              <p>2023 · 2h 21m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/spiderman.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Spiderman (2023)</h5>
              <p>2023 · 2h 20m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/Guardians_of_the_Galaxy_Vol._3_poster.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Guardians of the Galaxy Vol. 3 (2023)</h5>
              <p>2023 · 2h 30m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/littlemermaid.jpg" class="card-img-top" style="width: 100%; height: 26.5rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Little Mermaid (2023)</h5>
              <p>2023 · 1h 38m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/missionimpossible.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Mission: Impossible(2023)</h5>
              <p>2023 · 2h 43m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/Elemental.jpg" class="card-img-top" style="width: 100%; height: 26.5rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Elemental (2023)</h5>
              <p>2023 · 1h 41m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2">
          <div class="card">
            <img src="images/AntMan.jpg" class="card-img-top" style="width: 100%; height: 25rem; object-fit:cover">
            <div class="card-body p-0 m-0">
              <h5 class="card-title">Ant-Man and the Wasps (2023)</h5>
              <p>2023 · 2h 4m</p>
              <p>₱300.00</p>
            </div>
            <div class="card-body pt-0">
              <a href="{{route('login')}}" class="card-link" style="text-decoration: none; color: black;"><b>Add to Cart</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid text-white" style="padding-top: 2rem !important; background-color: #3d051b !important;" >
    @if(Session::has('successful'))

    <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-center" role="alert">
      <strong>{{Session::get('successful')}}.</strong>
    </div>
    @endif
    <div class="d-flex flex-column mx-4">
        <div class="d-flex justify-content-center pt-4">
            <h1>Get In Touch</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p>Message us for more inquiries and concerns</p>
        </div>
    </div>
  </div>

  <div class="container-fluid d-flex justify-content-center text-white" style="background-color: #3d051b !important;">

    <form action="{{url('/')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Email Address">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
        </div>

        <div class="row mt-2">
            <div class="form">
                <textarea class="form-control" placeholder="Type here your message" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
        </div>

            <div class="row mt-2 mb-5">
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col"></div>
              <div class="col">
                <button class="btn btn-primary" type="submit" style="background-color: white !important; color: black;">Submit</button>
              </div>
            </div>
      </form>
  </div>

<div class="container-fluid mt-5" style="padding-top: 5rem !important;" >
    <div class="d-flex justify-content-center">
        <p>Technological Institute of the Philippines Manila</p>
    </div>
    <div class="d-flex justify-content-center">
        <p>© 2023 TenFlix. All rights reserved.</p>
    </div>
</div>
@endsection