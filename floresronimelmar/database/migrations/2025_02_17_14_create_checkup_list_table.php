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
        Schema::create('checkup_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checkupdesc_id');
            $table->unsignedBigInteger('mech_acc_id');
            $table->enum('status',["pending","In Progress", "Completes"]);
            $table->date('date_assigned');
            $table->date('date_started');
            $table->date('date_done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkup_list');
    }
};
