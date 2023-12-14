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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->default(0)->unsigned();
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('short_description_en')->nullable();
            $table->text('short_description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->integer('views')->default(0);
            $table->text('tags')->nullable();
            $table->tinyInteger('home_display')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
