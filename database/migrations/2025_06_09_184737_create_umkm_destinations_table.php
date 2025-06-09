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
        Schema::create('umkm_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('content');
            $table->text('service');
            $table->text('map');
            $table->text('image');
            $table->text('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_destinations');
    }
};
