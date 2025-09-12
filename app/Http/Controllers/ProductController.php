<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Client;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
public function productIndex(Request $request, $category = null)
{
    //Get all active categories for the filter component
    $categories = Category::all();

    // 1. Build the query - DO NOT use ->get() here!
    // This is still a Query Builder object, ready to have more conditions added.
    $productsQuery = Product::with('category');

    // 2. Apply category filter if a category is provided
    if ($category) {
        // Find the category based on ID (since your route uses ID)
        $categoryModel = Category::findOrFail($category);
        $productsQuery->where('category_id', $categoryModel->id);
    }

    // 3. NOW execute the query AND paginate the results in one step
    $products = $productsQuery->paginate(12);

    // 4. Pass the variables to the view
    return view('cel2.portfolio', compact('products', 'categories', 'category'));
}
    
    public function index()
    {
        $products = Product::with(['client', 'category'])
                          ->latest()
                          ->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $clients = Client::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('admin.products.create', compact('clients', 'categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client_id' => 'required|exists:clients,id',
            'category_id' => 'required|exists:categories,id',
            'project_date' => 'required|date',
            'project_url' => 'nullable|url',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('product-images', 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = $imagePaths;
        }

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        $product->load(['client', 'category']);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $clients = Client::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        $product->load(['client', 'category']);
        
        return view('admin.products.edit', compact('product', 'clients', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client_id' => 'required|exists:clients,id',
            'category_id' => 'required|exists:categories,id',
            'project_date' => 'required|date',
            'project_url' => 'nullable|url',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'remove_images' => 'sometimes|array',
            'remove_images.*' => 'sometimes|string',
        ]);

        // Handle image removal
        if ($request->has('remove_images')) {
            $currentImages = $product->images ?? [];
            $imagesToRemove = $request->remove_images;
            
            foreach ($imagesToRemove as $imageToRemove) {
                // Remove from storage
                if (Storage::disk('public')->exists($imageToRemove)) {
                    Storage::disk('public')->delete($imageToRemove);
                }
                
                // Remove from array
                $currentImages = array_filter($currentImages, function($image) use ($imageToRemove) {
                    return $image !== $imageToRemove;
                });
            }
            
            $validated['images'] = array_values($currentImages); // Reindex array
        } else {
            $validated['images'] = $product->images;
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            $newImagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('product-images', 'public');
                $newImagePaths[] = $path;
            }
            $validated['images'] = array_merge($validated['images'] ?? [], $newImagePaths);
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        // Delete associated images
        if ($product->images) {
            foreach ($product->images as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}