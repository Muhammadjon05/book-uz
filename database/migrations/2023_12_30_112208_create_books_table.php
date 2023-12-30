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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("pages_count");
            $table->string("photo_url")->nullable();
            $table->unsignedBigInteger("published_year");
            $table->string("description")->nullable();
            $table->boolean("has_discount")->nullable();
            $table->unsignedDecimal("discount")->nullable();
            $table->foreignId("category_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
