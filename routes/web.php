<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/contacts', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required | email',
        'phone' => 'required',
        'subject' => 'nullable',
        'message' => 'required'
    ]);

    \Illuminate\Support\Facades\Mail::to('e.e.mtambala@gmail.com')
        ->send(new \App\Mail\DaycareMail($data));

    return redirect('/')
        ->with('flash', 'Message sent sucessfully, we will get back to you shortly');
})->name('index');
