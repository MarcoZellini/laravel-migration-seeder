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
            $table->string('company', 50);
            $table->string('departure_point', 50);
            $table->string('arrival_point', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('wagon_number')->unsigned()->nullable();
            $table->boolean('in_time')->default(1);
            $table->boolean('is_canceled')->default(0);
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
