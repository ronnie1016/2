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
        Schema::create('checkupdesc', function (Blueprint $table) {
            $table->id();
            $table->string('changeOil',50);
            $table->string('underchassis',50);
            $table->unsignedBigInteger('cars_id');
            $table->unsignedBigInteger('mech_acc_id');
            $table->string('mech_assign',50);
            $table->string('plate_number',50);
            $table->string('brand',50);
            $table->string('model',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkupdesc');
    }
};
