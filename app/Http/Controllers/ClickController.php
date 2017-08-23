<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Click;

class ClickController extends Controller
{
    public function store(Request $request)
    {
        $click = Click::create([
            'link' => $request->input('link')
        ]);
        return response([]);
    }

    public function total($keyword)
    {
        $total = Click::where('link', 'like', '%'.$keyword.'%')->count();
        return response($total);
    }
}
