<?php



Route::get('/', function () {
   
    $html ='<p>Hello pDf</p>';
    $pdf = PDF::loadHtml($html);
   // $pdf->generateFromHtml($html, 'hello.pdf');
    return $pdf->stream();
    
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
