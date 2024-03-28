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
        Schema::create('monhoc', function (Blueprint $table) {
            $table->string('mamh')->unique();
            $table->string('tenmh')->unique();
            $table->integer('sotc');
            $table->primary('mamh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monhoc');
    }
};
