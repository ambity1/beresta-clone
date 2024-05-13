<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    private ProductService $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }


    //products
    public final function index(): object
    {

        return $this->productService->getProducts();
    }

    public final function show(Product $product) : object
    {
        return $this->productService->getProductByID($product);
    }

    public final function showByCategory(Category $category, $sortBy) : object
    {
        return response()->json($this->productService->getProductByCategory($category, $sortBy));
    }
}
