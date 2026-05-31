<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('admin.testimoni.index');
    }
}