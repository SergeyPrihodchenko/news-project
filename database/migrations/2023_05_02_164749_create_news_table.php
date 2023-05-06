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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 225);
            $table->string('author_name', '50');
            $table->string('author_surname', '50');
            $table->string('text', '5000');
            $table->string('img', '300')->nullable()->default('null');
            $table->timestamps();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->foreignId('id_category')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
