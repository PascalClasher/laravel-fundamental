<?php

use Hamcrest\Description;
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
        schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dekan_id');
            $table->foreign('dekan_id')->references('id')->on('dekan');
            $table->string('name');
            $table->string('telp_number');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
