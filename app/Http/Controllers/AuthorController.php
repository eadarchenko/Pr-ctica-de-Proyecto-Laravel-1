<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function getAll(AuthorRequest $request) {
        return response()->json([
            'success' => true,
            'mensaje' => 'Obtengo todos los Autoress desde el controller',
            'data'    => DB::table('author')->get()
        ]);
    }

}
