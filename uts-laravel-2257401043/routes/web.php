<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

use function Termwind\style;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Daftar', function () {
    return view('Daftar');
});



Route::get('/home', function () {
   
    echo '
<style>
    .container {
        width: 80%;
        max-width: 600px;
        background-color: #08e1fd; /* Fixed the color value to be valid */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(229, 18, 18, 0.1);
        text-align: center;
        margin: 0 auto; /* Center the container */
    }
</style>
    <div class="container">
    <h1 style="color:navi;">Syafira Bilqis Farhani</h1>
    <h2 style="color:brown;">2257401043</h2>
    <h2 style="color:purple;">MI22B</h2>
    <div>
        <button style="color: blue; padding: 5px 20px; font-size: 16px;" onclick="window.location.href=\'/welcome\'">Logout</button>
    </div>
</div>
';
   
});

