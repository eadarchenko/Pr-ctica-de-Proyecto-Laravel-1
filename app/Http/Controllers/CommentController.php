<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getAll(CommentRequest $request) {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los Comentarios desde el controller',
            'data'    => DB::table('comment')->get()
        ]);
    }

}
