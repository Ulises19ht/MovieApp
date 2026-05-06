<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get("/movies", function () {
    return response()->json(Movie::all(), 200, [], JSON_UNESCAPED_UNICODE);
});