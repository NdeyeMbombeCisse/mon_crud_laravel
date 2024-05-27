<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('Affichage', [ArticleController::class,'liste_article']);
Route::get('Ajouter', [ArticleController::class,'ajouter_article']);
Route::post('ajouter/traitement' , [ArticleController::class, 'article_traitement']);
Route::get('/update_article/{nom}' , [ArticleController::class, 'update_article']);
Route::post('/update/traitement' , [ArticleController::class, 'update_traitement']);



