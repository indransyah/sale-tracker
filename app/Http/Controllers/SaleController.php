<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;

class SaleController extends Controller
{
    public function store(Request $request)
    {
        $sale = Sale::create([
            'link' => $request->input('link'),
            'product' => $request->input('product')
        ]);
        return response([]);
    }

    public function total($keyword)
    {
        $total = Sale::where('link', 'like', '%'.$keyword.'%')->count();
        return response($total);
    }
}
