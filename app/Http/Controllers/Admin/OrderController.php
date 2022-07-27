<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $this->setPageTitle('Orders', 'List of all orders');
        return view('admin.order.index');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        $this->setPageTitle('Orders', 'ID: '.$order->order_number);
        return view('admin.order.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->items()->delete();
        $order->delete();

        if (!$order) {
            return $this->responseRedirectBack('Error occurred while deleting order.', 'error', true, true);
        }
        return $this->responseRedirect('admin.orders.index', 'Order deleted successfully' ,'success',false, false);
    }
}
