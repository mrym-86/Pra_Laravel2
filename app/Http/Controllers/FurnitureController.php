<?php

namespace App\Http\Controllers;


use App\Models\furniture;
use Illuminate\Http\Request;
use App\Http\Requests\FurnitureRequest;


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
        // about画面へ遷移
        return view('about');
    }


    /**
     * 会社概要画面への遷移
     */
    public function company()
    {
        // company画面へ遷移
        return view('company');
    }


    /**
     * 新規登録画面への画面遷移
     */
    public function create(Request $request)
    {
        //create画面への遷移
        return view('create');
    }


    /**
     * 商品の新規登録処理
     */
    public function store(FurnitureRequest $request)
    {
        $furniture = new Furniture ;
        // 入力されたファイル名をファイルの格納先(パス)へ変更
        $file_path = "images/" . $request -> image_path ;

        $furniture -> name = $request -> name;
        $furniture -> price = $request -> price;
        $furniture -> details = $request -> details;
        $furniture -> color = $request -> color;
        $furniture -> material = $request -> material;
        $furniture -> image_path = $file_path;
        
        // 入力データを保存
        $furniture ->save();

        //TOPページへリダイレクト
        return redirect()->route('furniture.index');
    }


    /**
     * 詳細画面への遷移
     */
    public function show($id)
    {
        // 選択した商品の詳細ページへ遷移
        $furniture = Furniture::find($id);
        return view('details',compact('furniture'));
    }


    /**
     * 商品の登録内容編集画面へ遷移
     */
    public function edit($id)
    {
        // 選択した商品の編集ページへ遷移
        $furniture = Furniture::find($id);
        return view('edit',compact('furniture'));
    }

    
    /**
     * 登録商品の編集処理
     */
    public function update(FurnitureRequest $request,$id)
    {
        //商品データの更新
        $furniture = Furniture::findOrFail($id);

        $furniture->name = $request->input('name');
        $furniture->price = $request->input('price');
        $furniture->details = $request->input('details');
        $furniture -> color = $request -> input('color');
        $furniture -> material = $request -> input('material');

        $file_path = "images/" . $request -> input('image_path') ;
        $furniture -> image_path = $file_path;

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

        //選択した商品情報を削除
        $furniture->delete();

        //TOPページへリダイレクト
        return redirect()->route('furniture.index');
    }
}
