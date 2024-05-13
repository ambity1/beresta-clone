<?php

namespace App\Service;

use App\Http\Resources\ProductResource;
use App\Http\Resources\Test;
use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Log;

class ProductService
{


    public final function getProducts(): ?object
    {
        return response()->json(ProductResource::collection(Product::where('visibility', true)->get()));
    }

    public final function getProductByID(Product $product): object
    {
        return response()->json(ProductResource::collection(Product::find($product)));
    }

    public final function getProductByCategory(Category $category, string|null $sortBy): ?object
    {
        return response()->json(ProductResource::collection(
            $category->products()->where('visibility', true)->orderBy($sortBy)->get())
        );
    }

}
