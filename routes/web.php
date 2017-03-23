<?php



Route::get('/books/', 'BookController@index');

Route::get('/books/{title?}', 'BookController@view');


/* 
 * ERROR HANDLING AND DEBUGGING
 */

    /* Laravel 5 log viewer
     * https://github.com/rap2hpoutre/laravel-log-viewer
     */
    
    if(config('app.env') == 'local'){
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }

    
/* 
 * PRACTICE
 */

Route::any('/practice/{n?}', 'PracticeController@index');

Route::get('/', 'WelcomeController@index');
