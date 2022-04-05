<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\GoogleSheets;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request, GoogleSheets $googleSheet)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric|digits:10',
            'city' => 'required|string',
            'terms' => 'required|accepted'
        ],[
            'terms.accepted' => 'The Terms & Conditions must be accepted.'
        ]);

        $ord_num = random_int(100000, 999999);
        $values = [
            $ord_num, 
            $request->name,
            $request->phone, 
            $request->city, 
            'Argan 50DH, Amlou 12DH', 
            '2344 MAD', 
            date('Y-m-d H:i:s')
        ];

        

        if ($request->city == "agadir") {
            $googleSheet->saveDataToSheet($values, 'Agadir');
        }
        else if ($request->city == "autres") {
            $googleSheet->saveDataToSheet($values, 'Autres');
        }

        return response()->json([
            'message' => "Data saved successfully",
            'orderId' => $ord_num 
        ],201);
    }
}
