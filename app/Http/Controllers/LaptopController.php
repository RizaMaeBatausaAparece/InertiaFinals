<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use Inertia\Inertia;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
{
    $laptops = Laptop::all();
    return Inertia::render('laptop', [
        'laptops' => $laptops,
    ]);
}
}
