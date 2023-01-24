<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function manage()
    {
        $products = Product::query();
        // dd($products);
        $this->authorize('admin');
        return view('admin.manage', [
            'title' => 'Manage',
            'product' => $products->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }
}
