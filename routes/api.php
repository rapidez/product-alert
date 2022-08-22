<?php
use Rapidez\ProductAlert\Http\Controllers\AlertController;

Route::prefix('api')->group(function() {
    Route::post('product-alerts', AlertController::class);
});
