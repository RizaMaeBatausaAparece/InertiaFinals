<?php

namespace App\Http\Controllers;
use App\Models\Popular;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index()
    {
        $popular = Popular::all();
        return Inertia::render('popular', [
            'popular' => $popular,
        ]);
    }
}
