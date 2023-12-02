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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('catagori_id');
            $table->string('reerence')->nullable();
            $table->string('ex_tax')->nullable();
            $table->string('brand');
            $table->string('product_code');
            $table->string('reward_point')->nullable();
            $table->string('description')->nullable();
            $table->integer('in_stock');
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
