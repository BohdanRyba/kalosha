<?php
Route::get('/', "HomeController@index")->name('home');



Auth::routes();
Route::any('register', function () {
    return redirect('/login');
});
Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/',function(){
       return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('products',"ProductController");
    Route::resource('attachments',"AttachmentsController");
    Route::resource('galleries',"GalleryController");
    Route::resource('subscribes',"SubscribeController");
    Route::resource('contacts',"ContactController");
});
