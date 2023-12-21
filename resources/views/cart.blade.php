@extends('layout')
@section('title', 'Movie Website')
@section('nav')
<nav class="navbar navbar-expand-lg text-white" style="background-color: #3d051b !important;">
    <div class="container-fluid">
      <a class="navbar-brand px-5 text-white" href="{{'/home'}}"><img src="/images/1.png" style="width: 7rem !important; height: 1.5rem !important;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav">
            {{-- <div class="mb-2 mx-2" data-bs-toggle="tooltip" data-placement="top" title="Tooltip on top">{{Auth::user()->email}}</div> --}}
            <li class="mx-2">
              <form action="{{route('cart')}}" method="GET">
                <button type="submit" class="btn btn-secondary">&nbsp;&nbsp;&nbsp;Cart&nbsp;&nbsp;&nbsp;</button>
            </form>
            </li>
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </li>
        </ul>
    </div>
  </nav>
@endsection

@section('content')
@if(Session::has('success'))

<div class="alert alert-warning alert-dismissible fade show d-flex justify-content-center" role="alert">
  <strong>{{Session::get('success')}}</strong>
</div>
@endif

@if(Session::has('error'))

<div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center" role="alert">
  <strong>{{Session::get('error')}}</strong>
</div>
@endif
<h5 style="margin: 2rem;">My Cart</h5>
  <div class="container-fluid d-flex justify-content-between" style="width: 70% !important;">
    <table class="table ">
      <tbody>
        @foreach ($movies as $movie)
          <tr>
            <th scope="row">{{$movie->movieName}}</th>
            <td colspan="3">{{$movie->price}}</td> 
            <td><div class="form-outline" style="width: 22rem;">
              <input type="number" id="form1" class="form-control" value="1" style="width: 25% !important"/>
          </div></td>
            <td><a href={{"delete/".$movie['id']}} style="text-decoration: none;"><button class="btn btn-primary">Delete</button></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="order-summary">
      <h5>Order Summary</h5>
      <hr>
      <h5>Billing Address: </h5>
      {{Auth::user()->address}}
      <h5>Contant Number: </h5>
      {{Auth::user()->contact}}
      <br>
      @foreach ($movies as $movie)
      <input type="text" value="{{App\Models\Movies::sum('price')}}" id="total_price" name="total_price" hidden>
      @endforeach
      <h5 class="mt-2"id="finalPrice">Total: </h5>
      <hr>
      <form action="{{route('cartSubmit')}}" method="POST" id="cartSubmitForm">
        @csrf
        <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
        @foreach ($movies as $movie)
        <input type="text" value="{{$movie->id}}" name="movies_id[]"  hidden>
        <input type="text" value="{{$movie->movieName}}" name="movies_name[]"  hidden>
        <input type="text" value="{{App\Models\Movies::sum('price')}}" id="total_price" name="order_amount" hidden>
        @endforeach
        <button class="btn btn-primary" id="cartBtn" style="width: 100% !important; background-color: white !important; color: black;">Checkout</button>
      </form>
    </div>
  </div>

@endsection