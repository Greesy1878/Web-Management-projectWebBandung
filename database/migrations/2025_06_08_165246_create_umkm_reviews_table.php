<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umkm_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 150);
            $table->tinyInteger('rating'); // 1–5
            $table->text('comment');
            $table->string('media_path', 255)->nullable();
            $table->string('lokasi', 150);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umkm_reviews');
    }
};
