<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::dropIfExists('battery_5');
        Schema::dropIfExists('battery_6');
        Schema::dropIfExists('battery_7');
        Schema::dropIfExists('battery_8');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::create('battery_5', function (Blueprint $table) {
            // Tambahkan definisi kolom sesuai dengan struktur tabel yang dihapus
            $table->id();
            $table->timestamps();
            // Tambahkan kolom lainnya sesuai kebutuhan
        });

        Schema::create('battery_6', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Tambahkan kolom lainnya sesuai kebutuhan
        });

        Schema::create('battery_7', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Tambahkan kolom lainnya sesuai kebutuhan
        });

        Schema::create('battery_8', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Tambahkan kolom lainnya sesuai kebutuhan
        });
    }
};

