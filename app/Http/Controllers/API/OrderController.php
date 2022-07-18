<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\GoogleSheets;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request, GoogleSheets $googleSheet)
    {
        dd($request);

        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric|digits:10',
            'city' => 'required|string',
            'terms' => 'required|accepted'
        ],[
            'terms.accepted' => 'The Terms & Conditions must be accepted.'
        ]);

        // total is without 50 dh of delivery


        // [
        //     "name" => "sdfqsf"
        //     "phone" => "0600000000"
        //     "city" => "agadir"
        //     "terms" => true
        //     "products" => array:4 [
        //       0 => array:8 [
        //         "id" => "bc9a19dfzezs"
        //         "name" => "PACK OLIVES"
        //         "image" => "https://picsum.photos/seed/picsum/200/300"
        //         "description" => null
        //         "price" => 1995
        //         "option_id" => null
        //         "option" => null
        //         "quantity" => 1
        //       ]
        //       1 => array:8 [
        //         "id" => "bca194454f"
        //         "name" => "SELLOU HOME MADE"
        //         "image" => "https://picsum.photos/seed/picsum/200/300"
        //         "description" => null
        //         "price" => 80
        //         "option_id" => "bca194454f-250-G"
        //         "option" => "250 G"
        //         "quantity" => 2
        //       ]
        //       2 => array:8 [
        //         "id" => "bca194454f"
        //         "name" => "SELLOU HOME MADE"
        //         "image" => "https://picsum.photos/seed/picsum/200/300"
        //         "description" => null
        //         "price" => 100
        //         "option_id" => "bca194454f-500-G"
        //         "option" => "500 G"
        //         "quantity" => 2
        //       ]
        //       3 => array:8 [
        //         "id" => "bca194454f"
        //         "name" => "SELLOU HOME MADE"
        //         "image" => "https://picsum.photos/seed/picsum/200/300"
        //         "description" => null
        //         "price" => 120
        //         "option_id" => "bca194454f-1-KG"
        //         "option" => "1 KG"
        //         "quantity" => 1
        //       ]
        //     ]
        //     "total" => 2475
        //   ]

        $ord_num = random_int(100000, 999999);
        $values = [
            $ord_num, 
            $request->name,
            $request->phone, 
            $request->city, 
            'Argan 50DH, Amlou 12DH', 
            $request->total. ' + 50 MAD', //'2344 MAD',  
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

    public function addCoupon(Request $request)
    {
        $request->validate([
            'coupon' => 'required|string',
        ]);

        if (strtoupper($request->coupon) == "WELCOME") {
            return response()->json([
                'success' => true,
                'message' => "Coupon has been applied!",
            ],200);
        }
        return response()->json([
            'success' => false,
            'message' => "Coupon is not valid!",
        ]);
    }
}
