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
        Schema::create('update_cards', function (Blueprint $table) {
            $table->id();
            $table->string('productId');
            $table->string('image');
            $table->string('name');
            $table->integer('ex_tax');
            $table->string('userId');
            $table->string('quantity')->default(1);
            $table->string('totals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_cards');
    }
};
