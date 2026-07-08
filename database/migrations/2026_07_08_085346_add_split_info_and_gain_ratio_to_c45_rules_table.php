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
        Schema::table('c45_rules', function (Blueprint $table) {
            $table->decimal('split_info', 10, 6)->nullable()->after('gain');
            $table->decimal('gain_ratio', 10, 6)->nullable()->after('split_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('c45_rules', function (Blueprint $table) {
            $table->dropColumn(['split_info', 'gain_ratio']);
        });
    }
};
