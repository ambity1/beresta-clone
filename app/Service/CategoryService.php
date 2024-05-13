<?php

namespace App\Service;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;

class CategoryService
{

    public final function getCategories(): ?object
    {
        return response()->json(CategoryResource::collection(Category::where('visibility', true)->get()));
    }

}
