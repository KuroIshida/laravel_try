<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about',function(){
    return view('about');
});

Route::get('secret-page', ['as' => 'secret',function(){//URI Name : secret-page Route Name : secret. This can be used to simplify your routing by accessing or redirecting without typing the whole function.
    return "This is secret page";
}]);

Route::get('showsecret', function(){//redirecting to other route,we can add more method inside it
    return redirect()->route('secret');
});

Route::get('siswa', function(){//we name the route as siswa
  $siswa = ['A', 'B', 'C']; //we define arrray $siswa
  return view('about',compact('siswa')); //we pass the value of array siswa to view->about (btw the views are on resource file)
  //return view('about')->with('siswa', $siswa);//another way of passing data to views
  //return view('about', ['siswa'=>$siswa]);//here we directly pass them right away
});
