<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengukuran', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->float('average_voltage');
            $table->float('average_current');
            $table->float('average_humidity');
            $table->float('average_temperature');
            $table->float('average_resistance');
            $table->float('average_power');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengukuran');
    }
};
