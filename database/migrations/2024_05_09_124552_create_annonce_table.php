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
        Schema::create('annonce', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Users');
            $table->foreign('ID_Users')->references('id')->on('users');
            $table->unsignedBigInteger('ID_Categorie');
            $table->foreign('ID_Categorie')->references('id')->on('categorie');
            $table->string('Titre');
            $table->text('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};
