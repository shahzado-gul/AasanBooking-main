<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_city');
            $table->unsignedBigInteger('to_city');
            $table->foreign('from_city')->references('id')->on('cities')->cascadeOnDelete();
            $table->foreign('to_city')->references('id')->on('cities')->cascadeOnDelete();
            $table->double('rate')->nullable();
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->string("status")->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('vehicle_routes');
    }
};
