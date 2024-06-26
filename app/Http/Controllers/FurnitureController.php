<?php

namespace App\Http\Controllers;

use App\Models\furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 変数名はスネークケース
        $furnitures = furniture::all();
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
        return view('create');

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
    public function show(furniture $furniture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(furniture $furniture)
    {
        //
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, furniture $furniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(furniture $furniture)
    {
        //
    }
}
