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
        Schema::table('services', function (Blueprint $table) {
            $table->string('brochure')->nullable()->after('image');
        });
        Schema::table('industries', function (Blueprint $table) {
            $table->string('brochure')->nullable()->after('image');
        });
        Schema::table('solutions', function (Blueprint $table) {
            $table->string('brochure')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('many', function (Blueprint $table) {
            //
        });
    }
};
