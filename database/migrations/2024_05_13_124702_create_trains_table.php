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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time')->format('H , i , s');
            $table->time('arrival_time')->format('H , i , s');
            $table->string('train_code', 50);
            $table->tinyInteger('number_carriage')->unsigned();
            $table->boolean('is_inTime')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
