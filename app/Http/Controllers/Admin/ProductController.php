<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function add()
    {
        return view('admin.product_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);


        $product = new Product;

        $product->code = $this->generateCode();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        $product->user_id = auth()->user()->id;

        if($request->photo)
        {
            $product->photo = $this->uploadPhoto($request->photo);
        }

        $product->save();

        session()->flash('success', 'Product Created');

        return back();
    }

    private function uploadPhoto($file)
    {
        $name = time() . $file->getClientOriginalName();

        $destination = Product::IMAGE_PATH;

        $file->move($destination, $name);

        $url = '/' . $destination . $name;

        return $url;
    }

    private function generateCode()
    {

         $product = Product::latest()->first();

         if(is_null($product))
         {
             return 'PR-000001';
         }
         else {
             $id = $product->id;

             ++$id;
             $nn = "PR-";

             if($id < 10)
             {
               $zeros = '00000';
             }
             elseif ($id < 100) {
               $zeros = '0000';
             }
             elseif ($id < 1000) {
               $zeros = '000';
             }
             elseif ($id < 10000) {
               $zeros = '00';
             }
             elseif ($id < 100000) {
               $zeros = '0';
             }
             return $nn . $zeros . $id;
         }


    }

    public function view(Product $product)
    {
        return view('admin.product', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product_edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {

        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        if($request->photo)
        {
            $product->photo = $this->uploadPhoto($request->photo);
        }

        $product->save();

        session()->flash('success', 'Product Updated');

        return back();
    }

    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('success', 'Product Deleted');

        return back();
    }
}
