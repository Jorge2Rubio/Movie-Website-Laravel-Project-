<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movies;
use App\Models\Orders;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;
use Throwable;
use DB;

class MovieController extends Controller
{

    public function cart(){
      $movie = new Movies();
      $movies = $movie->getMovies();

      return view('cart', compact('movies'));
    }


    public function cartPost(Request $request){
      $movie = new Movies();
      $movie->movieName = $request->movieName;
      $movie->price  = $request->price;

      $movie->save();

      return redirect('/cart');
    }

    public function getInTouch(){
        return back()->with('successful', 'Thank you! We received your inquiries and concerns');
    }
    public function getInTouchGuest(){
      return back()->with('successful', 'Thank you! We received your inquiries and concerns');
    }

    public function delete($id){

      $data = Movies::find($id);
      $data->delete();
      
      return redirect('/cart');
    }

    public function cartSubmit(Request $request){
      try {

      $moviesSize = DB::table('movies')->count('id');
      
      for($i = 0; $i < $moviesSize; $i++){
        $order = new Orders();

        $order->order_amount = $request->order_amount;
        $order->user_id = $request->user_id;
        $order->movies_id = $request->movies_id[$i];
        $order->movie_name = $request->movies_name[$i];
        $order->save();
      };
      
      Schema::disableForeignKeyConstraints();

      DB::table('movies')->truncate();

      Schema::enableForeignKeyConstraints();
      
      return redirect('/cart')->with('success', 'Thank you for ordering!');
      }catch(Throwable $e){
        return redirect('/cart')->with('error', 'No item in cart!');
      }
    }


    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('home')->with('success', 'Login Success!');
        }
        return back()->with('error', 'Invalid Email or Password');
    }

    public function register(){
        return view('register');    
    }

    public function registerPost(Request $request){
      try{
        $user = new User();

        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('success', 'Register Successfully');
      }catch(Throwable $e){
        return back()->with('error', 'Email has been used');
      }
    }


    public function logout(){
      Auth::logout();

      return redirect()->route('login');
    }
}
