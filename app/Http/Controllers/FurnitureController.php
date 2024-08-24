<?php

namespace App\Http\Controllers;


use App\Models\furniture;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class FurnitureController extends Controller
{
    /**
     * 一覧画面への遷移
     */
    public function index()
    {
        // 変数名はスネークケース
        $furnitures = furniture::all();
        // コントローラ=>viewに変数を渡したいときはcompactを使用
        return view('index', compact('furnitures'));
    }


    /**
     * サイト概要画面への遷移
     */
    public function about()
    {
        return view('about');
    }


    /**
     * 会社概要画面への遷移
     */
    public function company()
    {
        return view('company');
    }


    /**
     * 新規登録画面への画面遷移
     */
    public function create(Request $request)
    {
        return view('create');
    }


    /**
     * 商品の新規登録処理
     */
    public function store(StorePostRequest $request)
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
     * 詳細画面への遷移
     */
    public function show($id)
    {
        $furniture = Furniture::find($id);
        return view('details',compact('furniture'));
    }


    /**
     * 商品の登録内容編集画面へ遷移
     */
    public function edit($id)
    {
        $furniture = Furniture::find($id);
        return view('edit',compact('furniture'));
    }


    /**
     * 登録商品の編集処理
     */
    public function update(Request $request,$id)
    {
        //商品データの更新
        $furniture = Furniture::findOrFail($id);
        $furniture->name = $request->input('name');
        $furniture->price = $request->input('price');
        $furniture->save();

        //更新後、一覧ページにリダイレクト
        return redirect()->route('furniture.index');
        
    }

    /**
     * 登録商品の削除処理
     */
    public function destroy($id)
    {
        $furniture = Furniture::find($id);

        $furniture->delete();

        return redirect()->route('furniture.index');
    }
}
