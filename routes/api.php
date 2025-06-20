<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contoh', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Ini response JSON dari route langsung',
        'data' => [
            'nama' => 'Jauhar',
            'prodi' => 'SI'
        ]

        ]);
});

Route::post('/matakuliah', [MataKuliahController::class, 'store']);