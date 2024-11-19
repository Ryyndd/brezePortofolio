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
        Schema::create('techstacks', function (Blueprint $table) {
            $table->id();
            $table->string('tech_image');
            $table->string('tech_name');
            $table->string('tech_fullname');
            $table->enum('tech_color', ['red' , 'orange', 'amber' ,'yellow', 'lime' , 'green' , 'emerald', 'teal', 'cyan' , 'sky' , 'blue' , 'indigo' , 'violet' , 'purple' ,'fuchsia' , 'pink' ,'rose']);
            $table->string('tech_slug')->unique();
            $table->text('tech_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('techstacks');
    }
};
