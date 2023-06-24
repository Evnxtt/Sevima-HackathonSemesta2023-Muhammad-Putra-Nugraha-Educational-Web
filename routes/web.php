<?php

use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/chat', function () {


//     $result = OpenAI::completions()->create([
//         'model' => 'text-davinci-003',
//         'prompt' => 'PHP is',
//     ]);

//     echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
// });
