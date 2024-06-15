<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('furnitures', function (Blueprint $table) {
            //
            $table->string('image'); //画像
            $table->string('size')->nullable(); //サイズ
            $table->string('color')->nullable(); //色
            $table->string('material')->nullable(); //素材

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('furnitures', function (Blueprint $table) {
            $table->dropColumn('image'); 
            $table->dropColumn('size'); 
            $table->dropColumn('color'); 
            $table->dropColumn('material'); 
        });
    }
};
