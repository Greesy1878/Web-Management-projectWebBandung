<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestinationIdToUmkmReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('umkm_reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('umkmdestination_id')->after('id'); 
            // Atau sesuaikan posisi kolom, dan tipe data sesuai dengan kolom 'id' destinasi
        });
    }

    public function down()
    {
        Schema::table('umkm_reviews', function (Blueprint $table) {
            $table->dropColumn('umkm_destination_id');
        });
    }
}