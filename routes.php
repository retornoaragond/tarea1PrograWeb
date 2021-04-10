<?php
    
    Route::get('/',function() { return view('main_page'); });
    Route::get('main_page',function() { return view('main_page'); });
    Route::get('book_one',function() { return view('book_one'); });
    Route::get('book_two',function() { return view('book_two'); });
    Route::get('book_three',function() { return view('book_three'); });
    Route::get('book_four',function() { return view('book_four'); });
    
    Route::dispatch();
?>
