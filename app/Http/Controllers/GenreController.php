<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of all genres
     */
    public function index()
    {
        $genres = Genre::all();
        
        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil diambil',
            'data' => $genres
        ], 200);
    }

    /**
     * Store a newly created genre
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name',
            'description' => 'nullable|string',
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }
}