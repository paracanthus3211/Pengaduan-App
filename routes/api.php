<?php

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// http://localhost:8000/api/v1/laporan
Route::prefix('v1')->group(function () {
    Route::get('/laporan', function () {
        return response()->json([
            'message' => 'success',
            'data' => Laporan::all()
        ]);
    });
});
