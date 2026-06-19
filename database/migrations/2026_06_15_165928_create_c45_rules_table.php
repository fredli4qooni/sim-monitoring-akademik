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
        Schema::create('c45_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_node')->nullable();
            $table->string('attribute')->nullable();
            $table->string('condition')->nullable();
            $table->string('label')->nullable();
            $table->decimal('entropy', 8, 4)->nullable();
            $table->decimal('gain', 8, 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c45_rules');
    }
};
