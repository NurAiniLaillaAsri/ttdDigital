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
        Schema::create('insurance_items', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_bj');
            $table->integer('jumlah_bj');
            $table->integer('harga_bj');
            $table->string('aktivasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_items');
    }
};
