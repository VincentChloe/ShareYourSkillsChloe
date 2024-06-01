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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Demandes');
            $table->foreign('ID_Demandes')->references('id')->on('demandes');
            $table->unsignedBigInteger('ID_Users');
            $table->foreign('ID_Users')->references('id')->on('users');
            $table->unsignedBigInteger('ID_Statuts');
            $table->foreign('ID_Statuts')->references('id')->on('statuts');
            $table->text('Commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
