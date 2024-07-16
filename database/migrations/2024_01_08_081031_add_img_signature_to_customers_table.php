<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('customers', function (Blueprint $table) {
      $table->string('img_signature')->nullable()->after('no_sid');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('customers', function (Blueprint $table) {
      if (Schema::hasColumn('customers', 'img_signature')) {
        $table->dropColumn('img_signature');
      }
    });
  }
};
