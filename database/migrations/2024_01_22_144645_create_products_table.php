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
            $table->string('name', 100);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('length')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('constrictive')->nullable(); //конструктив
            $table->text('roof')->nullable(); //кровля
            $table->text('processing')->nullable(); //обработка
            $table->double('price')->nullable();
            $table->boolean('visibility')->default(false);
            $table->string('alias', 200)->unique();
            $table->integer('sort')->nullable();
            $table->boolean('isPopulate');
            $table->boolean('isBenefit');
            $table->double('oldPrice');
            $table->integer('order')->nullable();
            $table->timestamps();
            $table->index('created_at');
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
