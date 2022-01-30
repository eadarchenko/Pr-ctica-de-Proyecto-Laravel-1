<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{

    public function getAll(ArticleRequest $request) {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los Articulos desde el controller',
            'data'    => DB::table('article')->get()
        ]);
    }


}
