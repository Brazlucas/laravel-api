<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error()
    {
        return response()->json(['message' => 'Você não tem permissão para acessar esta página'], 403);
    }
}
