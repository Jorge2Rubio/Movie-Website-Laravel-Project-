<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Throwable;

class MovieController extends Controller
{

    // public function fetchAPI(){
    //   $response = HTTP::withHeaders(
    //   [
    //     'X-RapidAPI-Key' =>'5d4dbabe7dmsh27fd7aef75bd01ep114e86jsn8beff30d443e',
    //     'X-RapidAPI-Host' => 'imdb8.p.rapidapi.com'
    //   ])->get('https://imdb8.p.rapidapi.com/title/v2/get-popular-movies-by-genre', [
    //     'genre' => 'adventure',
    //     'limit' =>'2']
    //   );

    //   $res = json_decode($response->body());
    //   $resultCount = count($res);
    //   $titleArray = array();

    //   for($i = 0; $i < $resultCount; $i++){
    //     $titleArray[] = substr($res[$i], 7);
    //   }

    //   $response2 = HTTP::withHeaders([
    //     'X-RapidAPI-Key' => '5d4dbabe7dmsh27fd7aef75bd01ep114e86jsn8beff30d443e',
    //     'X-RapidAPI-Host'=> 'imdb8.p.rapidapi.com'
    //   ])->get('https://imdb8.p.rapidapi.com/title/get-details', 
    //   [
    //     'tconst' => 'tt13287846/'
    //   ]);

    //   $res2 = json_decode($response2, true);
    //   foreach($res2 as $results){
    //     print($results);
    //   }
    // }



    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success', 'Login Success!');
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
