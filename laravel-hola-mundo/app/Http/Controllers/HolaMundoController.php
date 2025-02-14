<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\JsonResponse;

class HolaMundoController extends Controller
{
    public function __invoke(): JsonResponse
    {
        Expense::create(['description' => 'Hola Mundo']);
        return response()->json(['message' => 'Hola Mundo']);
    }
}