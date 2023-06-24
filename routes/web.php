<?php

use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;
<<<<<<< HEAD
=======
use App\Http\Controllers\ChatController;
>>>>>>> dd7e0e2 (update2)

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

<<<<<<< HEAD
// Route::get('/chat', function () {


//     $result = OpenAI::completions()->create([
//         'model' => 'text-davinci-003',
//         'prompt' => 'PHP is',
//     ]);

//     echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
// });
=======
Route::get('/chat', function () {
    $title = '';
    $content = '';
    return view('chat', compact('title', 'content'));
});

Route::post('/chat/generate', [ChatController::class, 'index']);
>>>>>>> dd7e0e2 (update2)
