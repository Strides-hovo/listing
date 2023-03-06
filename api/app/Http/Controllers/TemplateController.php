<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Models\Category;

class TemplateController extends Controller
{



    public function index(): CategoryCollection
    {
        return new CategoryCollection(Category::with(['group.templates'])->get());
    }




}
