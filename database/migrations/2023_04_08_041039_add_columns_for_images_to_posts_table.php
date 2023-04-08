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
		Schema::table('posts', function (Blueprint $table) {
			$table->string('main_image')->nullable()->after('category_id');
			$table->string('preview_image')->nullable()->after('main_image');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('posts', function (Blueprint $table) {
			$table->dropColumn('preview_image');
			$table->dropColumn('main_image');
		});
	}
};
