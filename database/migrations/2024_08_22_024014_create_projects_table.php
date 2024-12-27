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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('pro_image');
            $table->string('pro_title');
            $table->enum('pro_category', ['mobile', 'website', 'dekstop', 'api' ,'design']);
            $table->string('pro_slug')->unique();
            $table->string('pro_preview')->nullable();
            $table->string('pro_source')->nullable();
            $table->text('pro_description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
