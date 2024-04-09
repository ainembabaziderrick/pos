<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(10);
      return view('products.index',compact('products'));
     }

     public function product_add(){
      
        return view('products.add');
       }

       public function product_add_insert(Request $request){
        $products = new Product;
        $products->product_name = trim($request->product_name);
        $products->description = trim($request->description);
        $products->brand = ($request->brand);
        $products->price = trim($request->price);
        $products->quantity = trim($request->quantity);
        $products->alert_stock = trim($request->alert_stock);
        $products->save();
      
      if ($products){
         return redirect('admin/products')->with('success', 'Product successfully created');
      
      }

      return redirect()->back()->with('error', 'Product not  created');

      
  }

  public function EditProduct($id){
    $products = Product::find($id);
    return view('products.edit', compact('products'));
 
 }

 public function UpdateProduct(Request $request, $id){

    $update =   Product::find($id)->update([
           'product_name' => $request->product_name,
           'description' => $request->description,
           'brand' => $request->brand,
           'price' => $request->price,
           'quantity' => $request->quantity,
           'alert_stock' => $request->alert_stock,
                  
       ]);
       return redirect('admin/products')->with('success','Product Updated succcessfully');
    
    }

    public function DeleteProduct($id){
        $delete = Product::find($id)->Delete();
        return Redirect()->back()->with('success','Product Deleted succcessfully');
     }

}
