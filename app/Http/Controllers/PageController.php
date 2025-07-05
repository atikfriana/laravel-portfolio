<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\Portfolio;

class PageController extends Controller
{
    public function index()
    {
        // Ambil data dari model
        $pendidikan = Pendidikan::all();
        $portfolio = Portfolio::all();

        // Kirim data ke view
        return view('index', compact('pendidikan', 'portfolio'));
    }
}

