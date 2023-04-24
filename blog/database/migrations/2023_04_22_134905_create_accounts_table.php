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
        if(!Schema::hasTable('accounts')) {
            Schema::connection('mysql')->create('accounts', function (Blueprint $table) {
                $table->id('matricule');
                $table->string('name');
                $table->string('lastname');
                $table->string('email')->unique;
                $table->string('password');
                $table->string('location');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
