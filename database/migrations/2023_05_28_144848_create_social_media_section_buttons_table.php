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
        Schema::create('social_media_section_buttons', function (Blueprint $table) {
            $table->id();
            $table->string('button1');
            $table->string('buttonurl1');
            $table->string('button2');
            $table->string('buttonurl2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media_section_buttons');
    }
};
