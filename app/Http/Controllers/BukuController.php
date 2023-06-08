<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(): view
    {
        $bukus = Buku::latest()->paginate(5);
        return view('Layouts.buku', compact('bukus'));
    }
}

?>