<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductOption;

class ProductController extends Controller
{
    public function index()
    {
        $this->setPageTitle('Products', 'List of all products');
        return view('admin.product.index');
    }

    public function create()
    {
        $this->setPageTitle('Products', 'Create a new Product');
        $categories = Category::all();
        $sections = Section::all();
        // $gammes = Gamme::all();
        return view('admin.product.create', compact('categories', 'sections'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:items',
            'image' => 'required|mimes:jpeg,bmp,png,jpg',
            'description' => 'string',
            'price' => 'required',
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->price = $request->price;
        $item->special_price = $request->special_price;
        
        if(isset($request->status)){
            $item->status = true;
        } else {
            $item->status = false;
        }
        
        $item->save();

        $image = $request->file('image');

        if (isset($image))
        {
            $item->addMedia($image)
                ->usingName($item->name)
                ->toMediaCollection('items');
        }

        // $imagename = 'products/'.$item->slug.'-'.Str::random(10).'.'.$image->getClientOriginalExtension();
        // if ($image->isValid()) {
        //     $request->image->storeAs('/public', $imagename);
        // }
        // $item->image = $imagename;

        $product = new Product();
        $product->item_id = $item->id;
        $product->size = $request->size ?? '';
        $product->save();

        $product->categories()->attach($request->categories);
        $product->sections()->attach($request->sections);
        // $product->gammes()->attach($request->gammes);

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while creating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product added successfully' ,'success',false, false);
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $this->setPageTitle('Products', 'Edit Product: '.$item->name);
        $categories = Category::all();
        $sections = Section::all();
        // $gammes = Gamme::all();
        return view('admin.product.edit', compact('item', 'categories', 'sections'));
    }

    public function update(Request $request)
    {
        $item = Item::findOrFail($request->id);

        $this->validate($request,[
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg',
            'description' => 'string',
            'price' => 'required',
        ]);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->price = $request->price;
        $item->special_price = $request->special_price;

        if(isset($request->status)){
            $item->status = true;
        } else {
            $item->status = false;
        }

        $item->save();

        $image = $request->file('image');
        
        if (isset($image))
        {
            if($item->getFirstMedia('items')) {
                $item->getFirstMedia('items')->delete();
            }
            $item->addMedia($image)
                ->usingName($item->name)
                ->toMediaCollection('items');
            
            // if(file_exists(storage_path('app/public/'.$item->image))) {
            //     unlink(storage_path('app/public/'.$item->image));
            // }

            // $imagename = 'products/'.$item->slug.'-'.Str::random(10).'.'.$image->getClientOriginalExtension();
            // if ($image->isValid()) {
            //     $request->image->storeAs('/public', $imagename);
            // }
            // $item->image = $imagename;
        }

        $item->product->size = $request->size ?? '';
        $item->product->save();
        $item->product->categories()->sync($request->categories);
        $item->product->sections()->sync($request->sections);

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while updating product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product updated successfully' ,'success',false, false);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if($item->orders->count() > 0) {
            return $this->responseRedirectBack('This product is in some orders.', 'error', true, true);
        }

        // if (Storage::disk('public')->exists($item->image)) {
        //     unlink(storage_path('app/public/'.$item->image));
        // }

        $item->product->categories()->detach();
        $item->product->sections()->detach();
        $item->product->gammes()->detach();
        $item->product->delete();
        $item->delete();
        //bestseller & why us

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while deleting product.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product deleted successfully' ,'success',false, false);
    }
}
