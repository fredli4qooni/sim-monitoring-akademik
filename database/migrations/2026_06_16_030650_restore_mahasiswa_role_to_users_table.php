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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id')->nullable()->after('role');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('cascade');
            
            // Raw DB statement to update ENUM since Doctrine DBAL doesn't fully support ENUM modifications simply sometimes
            \DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('admin', 'prodi', 'mahasiswa') NOT NULL DEFAULT 'admin'");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['mahasiswa_id']);
            $table->dropColumn('mahasiswa_id');
            \DB::statement("ALTER TABLE users MODIFY COLUMN role ENUM('admin', 'prodi') NOT NULL DEFAULT 'admin'");
        });
    }
};
