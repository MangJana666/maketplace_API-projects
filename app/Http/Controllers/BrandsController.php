<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::all();
        return response()->json($brand);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ], [
            'name.required => Brand name is required'
        ]);
        $brand = Brand::create($validateData);
        if(!$brand){
            return response()->json(['message' => 'Eror creating brand'], 500);
        }
        return response()->json(['message' => 'Brand created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::find($id);

        if($product){
            return response()->json(['brand' => $brand]);
        }else{
            return response()->json(['message' => 'Brand not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ], [
            'name.required => Brand name is required'
        ]);

        $brand = Brand::find($id);
        if(!$brand){
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->update($validateData);
        return response()->json(['message' => 'Brand updated successfully', 'brand' => $brand], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if(!$brand){
            return response()->json(['message' => 'Brand not found'], 404);
        }
        $brand->delete();
        return response()->json(['message' => 'Brand deleted successfully'], 200);
    }
}
