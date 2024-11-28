<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword', ' ');
    
        $products = new Product;
        if ($keyword) {
            $products = $products->where('name', 'like', "%$keyword%")
                ->orWhere('price', 'like', "%$keyword%")
                ->orWhere('stock', 'like', "%$keyword%")
                ->orWhereHas('categories', function ($query) use ($keyword) {
                    $query->where('name', 'like', "%$keyword%");
                })
                ->orWhereHas('brand', function ($query) use ($keyword) {
                    $query->where('name', 'like', "%$keyword%");
                });
                
        }
        //search->orderby->paginate
        $products = $products->orderByDesc('price')->paginate(4);
        
    
        return response()->json(['products' => $products]);

        // $products = Product::all();
        // return response()->json(['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        $products = Product::create($validateData);
        if(!$products){
            return response()->json(['message' => 'Eror creating product'], 500);
        }
        return response()->json(['message' => 'Product created successfully', 'product' => $products], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);

        if($products){
            return response()->json(['product' => $products]);
        }else{
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'brand_id' => 'required',
        ], [
            'name.required => Product name is required',
            'price.required => Product price is required',
            'stock.required => Product stock is required',
            'category_id.required => Product category is required',
            'brand_id.required => Product brand is required',
        ]
    
    );
        $products = Product::find($id);
        if(!$products){
            return response()->json(['message' => 'Product not found'], 404);
        }

        $products->update($validateData);
        return response()->json(['message' => 'Product updated successfully', 'product' => $products], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        if(!$products){
            return response()->json(['message' => 'Product not found'], 404);
        }
        $products->delete();
        return response()->json(['message' => 'Product deleted successfully'], 201);
    }
}
