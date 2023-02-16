<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        return view('welcome', ['Products' => Product::all()]);
    }
    public function Add(){
        return view('Add');
    }
    public function Edit($id){
        return view('edit', ['Products' => Product::where('id', $id)->get()]);
    }
    public function Details($id){
        return view('Details', ['Products' => Product::where('id', $id)->get()]);
    }

    public function SaveProduct(Request $request) {
        

        $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->desc = $request->desc;
        $newProduct->price = $request->price;
        $newProduct->Quantity = $request->Quantity;
        $newProduct->save();


        return redirect('/AddRouter');
    }

    public function UpdateProduct(Request $request) {

        $updatedProduct = Product::find($request->id);
        $updatedProduct->name = $request->name;
        $updatedProduct->desc = $request->desc;
        $updatedProduct->price = $request->price;

        $updatedProduct->update();

        return redirect('/');

    }
    public function DeleteProduct(Request $request) {
        
        $updatedProduct = Product::find($request->id);
        
        $updatedProduct->Delete();
        
        return redirect('/');
        
    }
    // this shit is not working 
    public function AddQuantity(Request $request) {
    
        $updatedProduct = Product::find($request->id);
        $updatedProduct->Quantity = $updatedProduct->Quantity + $request->Added;
    
        $updatedProduct->save();
    
        return redirect('/');
    
    }
}
