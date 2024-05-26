<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 変数名はスネークケース
        $furnitures = Furniture::all();
        // コントローラ=>viewに変数を渡したいときはcompactを使用
        return view('index', compact('furnitures'));
    }

    public function about()
    {
        return view('about');
    }

    public function company()
    {
        return view('company');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Furniture $furniture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Furniture $furniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Furniture $furniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Furniture $furniture)
    {
        //
    }
}
