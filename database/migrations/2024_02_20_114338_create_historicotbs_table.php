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
        Schema::create('historicotb', function (Blueprint $table) {
            $table->string('nomeFK');
            $table->string('colesterol_HDL');
            $table->string('colesterol_LDL');
            $table->string('glicemia');
            $table->string('pressao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicotbs');
    }
};
