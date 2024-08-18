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
        // dd('indexは飛んでる');
        $furnitures = furniture::all();
        // コントローラ=>viewに変数を渡したいときはcompactを使用
        return view('index', compact('furnitures'));
    }

    public function about()
    {
        // dd('about確認');

        return view('about');
        //return view('about');

    }

    public function company()
    {
        return view('company');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $furniture = new Furniture ;
        $file_path = "images/" . $request -> image_path ;

        $furniture -> name = $request -> name;
        $furniture -> price = $request -> price;
        $furniture -> details = $request -> details;
        $furniture -> color = $request -> color;
        $furniture -> material = $request -> material;
        $furniture -> image_path = $file_path;
        
        $furniture ->save();

        return redirect()->route('furniture.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $furniture = Furniture::find($id);

        return view('details',compact('furniture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
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
    public function destroy($id)
    {
        //
        $furniture = Furniture::find($id);

        $furniture->delete();

        return redirect()->route('furniture.index');
    }
}
