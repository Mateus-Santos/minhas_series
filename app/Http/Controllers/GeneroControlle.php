<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GeneroControlle extends Controller
{
    public function index()
    {
        $genero = Genero::all();
        return view('/generos', compact('generos'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
    
    }

    public function show(Genero $genero)
    {
        
    }

    public function edit(Genero $genero)
    {

    }

    public function update(Request $request, Genero $genero)
    {
    
    }

    public function destroy(Genero $genero)
    {
        
    }
}
