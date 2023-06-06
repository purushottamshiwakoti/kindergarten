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
        Schema::create('header_banners', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('heading');
            $table->text('paragraph');
            $table->string('button1');
            $table->string('button2');
            $table->string('buttonurl1');
            $table->string('buttonurl2');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_banners');
    }
};
