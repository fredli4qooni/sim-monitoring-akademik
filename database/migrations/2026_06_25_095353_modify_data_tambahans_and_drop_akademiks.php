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
        Schema::table('data_tambahans', function (Blueprint $table) {
            $table->decimal('ip_terakhir', 3, 2)->nullable()->after('mahasiswa_id');
        });

        Schema::dropIfExists('data_akademiks');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_tambahans', function (Blueprint $table) {
            $table->dropColumn('ip_terakhir');
        });

        Schema::create('data_akademiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->cascadeOnDelete();
            $table->integer('semester');
            $table->decimal('ips', 3, 2);
            $table->decimal('ipk', 3, 2);
            $table->integer('total_sks');
            $table->timestamps();
        });
    }
};
