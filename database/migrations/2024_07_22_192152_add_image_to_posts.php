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
    Schema::table('images', function (Blueprint $table) {
      // $table->unsignedBigInteger('post_id')->after('name');
      // $table->foreign('post_id')->references('id')->on('posts');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('images', function (Blueprint $table) {
      // $table->dropForeign('images_post_id_foreign');
      // $table->dropColumn('post_id');
    });
  }
};
