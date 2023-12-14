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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->after('id')->unique();
        });
        Schema::table('careers', function (Blueprint $table) {
            $table->string('slug')->after('id')->unique();
        });
        Schema::table('industries', function (Blueprint $table) {
            $table->string('slug')->after('id')->unique();
        });
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->after('id')->unique();
        });
        Schema::table('solutions', function (Blueprint $table) {
            $table->string('slug')->after('id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
