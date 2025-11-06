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
        Schema::create('tekliflers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talep_id')->constrained('talep_forms');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tekliflers');
    }
};
