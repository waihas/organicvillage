<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gamme;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GammeController extends Controller
{
    public function index()
    {
        $this->setPageTitle('Gammes', 'List of all gammes');
        return view('admin.gamme.index');
    }

    public function create()
    {
        $this->setPageTitle('Gammes', 'Create a new Gamme');
        $categories = Category::all();
        $sections = Section::all();
        $products = Item::products();
        return view('admin.gamme.create', compact('categories', 'sections', 'products'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:items',
            'image' => 'required|mimes:jpeg,bmp,png,jpg',
            'description' => 'string',
            'products' => 'required',
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
        
        // $imagename = 'gammes/'.$item->slug.'-'.Str::random(10).'.'.$image->getClientOriginalExtension();
        // if ($image->isValid()) {
        //     $request->image->storeAs('/public', $imagename);
        // }
        // $item->image = $imagename;

        $gamme = new Gamme();
        $gamme->item_id = $item->id;
        $gamme->save();

        $gamme->categories()->attach($request->categories);
        $gamme->sections()->attach($request->sections);
        $gamme->products()->attach($request->products);

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while creating gamme.', 'error', true, true);
        }
        return $this->responseRedirect('admin.gammes.index', 'Gamme added successfully' ,'success',false, false);
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $this->setPageTitle('Gammes', 'Edit Gamme: '.$item->name);
        $categories = Category::all();
        $sections = Section::all();
        $products = Item::products();
        return view('admin.gamme.edit', compact('item', 'categories', 'sections', 'products'));
    }

    public function update(Request $request)
    {
        $item = Item::findOrFail($request->id);

        $this->validate($request,[
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg',
            'description' => 'string',
            'products' => 'required',
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

            // $imagename = 'gammes/'.$item->slug.'-'.Str::random(10).'.'.$image->getClientOriginalExtension();
            // if ($image->isValid()) {
            //     $request->image->storeAs('/public', $imagename);
            // }
            // $item->image = $imagename;
        }

        $item->gamme->categories()->sync($request->categories);
        $item->gamme->sections()->sync($request->sections);
        $item->gamme->products()->sync($request->products);

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while updating gamme.', 'error', true, true);
        }
        return $this->responseRedirect('admin.gammes.index', 'Gamme updated successfully' ,'success',false, false);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if($item->orders->count() > 0) {
            return $this->responseRedirectBack('This gamme is in some orders.', 'error', true, true);
        }

        // if (Storage::disk('public')->exists($item->image)) {
        //     unlink(storage_path('app/public/'.$item->image));
        // }

        $item->gamme->categories()->detach();
        $item->gamme->sections()->detach();
        $item->gamme->products()->detach();
        $item->gamme->delete();
        $item->delete();

        if (!$item) {
            return $this->responseRedirectBack('Error occurred while deleting gamme.', 'error', true, true);
        }
        return $this->responseRedirect('admin.gammes.index', 'Gamme deleted successfully' ,'success',false, false);
    }
}
