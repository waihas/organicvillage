<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $products_count = Item::products()->count();
        // $gammes_count = Item::gammes()->count();
        // $orders_count = Order::count();
        // $today_orders_count = Order::whereDate('created_at', Carbon::today())->count();
        // $processing_orders_count = Order::where('status', 'processing')->count();
        // $completed_orders_count = Order::where('status', 'completed')->count();
        // $returned_orders_count = Order::where('status', 'returned')->count();
        // $messages_count = Message::count();
        // $coupons_count = Coupon::count();
        // $orders_completed_today = Order::where('status', 'completed')->whereDate('updated_at', Carbon::today())->count();
        // $popular_items = Item::withCount('orders')->with('media', 'orders')
        //                     ->take(5)->get();

        // $data = Item::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy('month_name')
        //     ->orderBy('createdAt')
        //     ->get();
        // $products = Product::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy('month_name')
        //     ->orderBy('createdAt')
        //     ->get();
        // $gammes = Gamme::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy('month_name')
        //     ->orderBy('createdAt')
        //     ->get();

        // return view('admin.dashboard.index', compact('products_count',
        //                                     'gammes_count',
        //                                     'orders_count',
        //                                     'today_orders_count',
        //                                     'processing_orders_count',
        //                                     'messages_count',
        //                                     'coupons_count',
        //                                     'orders_completed_today',
        //                                     'completed_orders_count',
        //                                     'returned_orders_count',
        //                                     'data',
        //                                     'products',
        //                                     'gammes',
        //                                     'popular_items'));
        return view('admin.dashboard.index');
    }
}
