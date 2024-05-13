<?php

namespace App\Http\Controllers;

use App\Service\CategoryService;
use App\Service\ProductService;

class CategoryController extends Controller
{

    private CategoryService $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService=$categoryService;
    }

    //categories
    public final function index(): object
    {
        return $this->categoryService->getCategories();
    }

}
