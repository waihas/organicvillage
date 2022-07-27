<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $this->setPageTitle('Coupons', 'List of all coupons');
        return view('admin.coupon.index');
    }

    public function create()
    {
        $this->setPageTitle('Coupons', 'Create a new Coupon');
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required|min:3|unique:coupons',
            'percent' => 'required',
        ]);

        $coupon = new Coupon();
        $coupon->code = $request->code;
        $coupon->percent = $request->percent;
        $coupon->save();

        if (!$coupon) {
            return $this->responseRedirectBack('Error occurred while creating coupon.', 'error', true, true);
        }
        return $this->responseRedirect('admin.coupons.index', 'Coupon added successfully' ,'success',false, false);
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        $this->setPageTitle('Coupons', 'Edit Coupon: '.$coupon->name);
        return view('admin.coupon.edit', compact('coupon'));
    }

    public function update(Request $request)
    {
        $coupon = Coupon::findOrFail($request->id);

        $this->validate($request,[
            'code' => 'required|min:3',
            'percent' => 'required',
        ]);
        
        $coupon->code = $request->code;
        $coupon->percent = $request->percent;
        $coupon->save();

        if (!$coupon) {
            return $this->responseRedirectBack('Error occurred while updating coupon.', 'error', true, true);
        }
        return $this->responseRedirect('admin.coupons.index', 'Coupon updated successfully' ,'success',false, false);
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);

        $coupon->delete();

        if (!$coupon) {
            return $this->responseRedirectBack('Error occurred while deleting coupon.', 'error', true, true);
        }
        return $this->responseRedirect('admin.coupons.index', 'Coupon deleted successfully' ,'success',false, false);
    }
}
