<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
        ]);

        return response()->json([
            'message' => "Data saved successfully"
        ],201);
    }
}
