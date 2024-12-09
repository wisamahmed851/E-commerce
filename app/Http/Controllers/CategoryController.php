<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();
        return view('ecommerce.category.categories', compact('categories'));
    }
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('ecommerce.category.addcategory', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:categories|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
                'data' => null
            ]); // 422 Unprocessable Entity
        }
        $validated = $validator->validated();
        Category::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Category Add Successfull!',
            'data' => null,
        ]);
    }
}
