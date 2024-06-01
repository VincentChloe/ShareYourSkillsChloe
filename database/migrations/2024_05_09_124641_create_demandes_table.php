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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Users_Annonce');
            $table->foreign('ID_Users_Annonce')->references('id')->on('users');
            $table->unsignedBigInteger('ID_Users_Demande');
            $table->foreign('ID_Users_Demande')->references('id')->on('users');
            $table->unsignedBigInteger('ID_Annonce');
            $table->foreign('ID_Annonce')->references('id')->on('annonce');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
