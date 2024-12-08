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
        Schema::create('admin_panels', function (Blueprint $table) {
            $table->id();
            $table->string('adminName')->nullable();
            $table->string('userId')->nullable();
            $table->string('adminMail')->nullable();
            $table->string('adminMobile')->nullable();
            $table->string('status')->nullable();
            $table->string('adminType')->nullable();
            $table->text('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_panels');
    }
};
