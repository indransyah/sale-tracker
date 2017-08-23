<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $email = Email::create([
            'link' => $request->input('link'),
            'email' => $request->input('email')
        ]);
        return response([]);
    }

    public function total($keyword)
    {
        $total = Email::where('link', 'like', '%'.$keyword.'%')->count();
        return response($total);
    }
}
