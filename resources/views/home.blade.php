@extends('layout')
@section('title', 'Movie Website')
@section('nav')
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
      <a class="navbar-brand px-5 text-white" href="{{'/'}}">@ TenFlix</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="btn-group dropstart">
        <button type="button" class="btn bg-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        </button>
        <ul class="dropdown-menu">
            <div style="display: flex; justify-content: center;"><h5>Hello, </h5></div>
            <div class="mb-2 mx-2" style="display: flex; justify-content: center;">{{Auth::user()->email}}</div>
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="width: 100% !important;">Logout</button>
                </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection

@section('content')
<div class="container-fluid bg-dark-subtle" style="height: 300px !important;">
    <div class="d-flex flex-column mb-3">
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
  <div class="container text-center">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card">
            <img src="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p>2023 . 144 minutes</p>
              <p>P300.00</p>
            </div>
            <div class="card-body">
              <a href="#" class="card-link" style="text-decoration: none; color: black;">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-dark text-white" style="padding-top: 2rem !important;">
    <div class="d-flex flex-column mx-4">
        <div class="d-flex justify-content-center pt-4">
            <h1>Get In Touch</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p>Message us for more inquiries and concerns</p>
        </div>
    </div>
  </div>

  <div class="container-fluid d-flex justify-content-center bg-dark">

    <form action="" method="POST">
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
                <button class="btn btn-primary" type="button" style="background-color: white !important; color: black;">Submit</button>
              </div>
            </div>
      </form>
  </div>

<div class="container-fluid mt-5" style="padding-top: 5rem !important;">
    <div class="d-flex justify-content-center">
        <p>Technological Institute of the Philippines Manila</p>
    </div>
    <div class="d-flex justify-content-center">
        <p>© 2023 TenFlix. All rights reserved.</p>
    </div>
</div>
@endsection