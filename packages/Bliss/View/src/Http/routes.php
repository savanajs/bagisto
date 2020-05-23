<?php

// Preview templates
// http://localhost:3000/emails/exemple.default

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

    Route::get('/emails/{email}', 'Bliss\View\Http\Controllers\ViewController@email')->defaults('_config', [
        'view' => 'shop::emails.'
    ]);

    Route::fallback('Bliss\View\Http\Controllers\ViewController@notFound');

});