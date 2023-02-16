<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('welcome', ['Products' => Product::all()]);
    }
    public function Add(){
        return view('Add');
    }
    public function Edit($id){
        return view('edit', ['Products' => Product::where('id', $id)->get()]);
    }

    public function saveProduct(Request $request) {
        

        $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->desc = $request->desc;
        $newProduct->price = $request->price;
        $newProduct->Quantity = $request->Quantity;
        $newProduct->save();


        return redirect('/AddRouter');
    }

    public function updateProduct(Request $request) {

        $updatedProduct = Product::find($request->id);
        $updatedProduct->name = $request->name;
        $updatedProduct->desc = $request->desc;
        $updatedProduct->price = $request->price;
        $updatedProduct->Quantity = $request->Quantity;

        $updatedProduct->update();

        return redirect('/');

    }
}
