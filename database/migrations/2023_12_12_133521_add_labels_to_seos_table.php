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
        Schema::table('seos', function (Blueprint $table) {
            $table->dropColumn('key');
            $table->dropColumn('value');
            $table->string('meta_title')->nullable();
            $table->string('keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('author')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_site_name')->nullable();
            $table->string('canonical')->nullable();
            $table->string('image_src')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_image_url')->nullable();
            $table->string('itemprop_name')->nullable();
            $table->string('itemprop_image')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_url')->nullable();
            $table->text('twitter_card')->nullable();
            $table->string('twitter_site')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_creator')->nullable();
            $table->string('twitter_image')->nullable();
            $table->text('google_analytics_key')->nullable();
            $table->text('google_tag_manager_key')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seos', function (Blueprint $table) {
            //
        });
    }
};
