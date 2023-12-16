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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('price');
            $table->text('quantity')->nullable();
            $table->text('discount')->nullable();
            // $table->enum('hot_product',[0,1])->default(0);
            $table->string('tag')->unique();
            $table->string('slug')->unique();
            $table->text('best_selling')->nullable();
            $table->json('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
