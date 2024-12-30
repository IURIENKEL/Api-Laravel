<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('produtos',[ProdutosController::class,'index']);

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, API!']);
});

Route::post('produtos', [ProdutosController::class, 'store']);
Route::put('produtos/{id}', [ProdutosController::class, 'update']);
Route::delete('produtos/{id}', [ProdutosController::class, 'delete']);