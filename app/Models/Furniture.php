<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;
    // モデルとテーブルの紐付きをLaravelが認識してくれない時は以下の記載を追記
    protected $table ="furnitures";
    protected $fillable = ['name', 'price', 'details'];
}
