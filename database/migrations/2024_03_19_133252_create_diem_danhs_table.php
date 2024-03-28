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
        Schema::create('diemdanh', function (Blueprint $table) {
            $table->id();
            $table->string('mssv');
            $table->string('monhoc');
            $table->date('ngay');
            $table->string('trangthai');
            $table->foreign('mssv')->references('mssv')->on('sinhvien')->onDelete('cascade');
            $table->foreign('monhoc')->references('tenmh')->on('monhoc')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diemdanh');
    }
};
