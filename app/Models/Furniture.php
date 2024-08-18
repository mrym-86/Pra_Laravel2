<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class furniture extends Model
{
    use HasFactory;
    // モデルとテーブルの紐付きをLaravelが認識してくれない時は以下の記載を追記
    protected $table ="furnitures";
    protected $fillable = [
        'name', 
        'price', 
        'details',
        'image',
        'color',
        'material',
        'image_path'];

    public function InsertFurniture($request){
        return $this->create([
            'name' -> $request -> name,
            'price' -> $request -> price,
            'details' -> $request -> details,
            'image' -> $request -> image,
            'color' -> $request -> color,
            'material' -> $request -> material,
            'image_path' -> $request ->image_path
        ]);
    }
}
