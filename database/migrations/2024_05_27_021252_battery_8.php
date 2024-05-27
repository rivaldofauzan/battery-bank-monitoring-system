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
    public function up()
    {
        Schema::create('battery_8', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->float('voltage');
            $table->float('current');
            $table->float('humidity');
            $table->float('temperature');
            $table->float('resistance');
            $table->float('power');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('battery_8');
    }
};
