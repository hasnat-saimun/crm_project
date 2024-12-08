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
        Schema::create('lead_manages', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('sureName')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('faxNo')->nullable();
            $table->string('passid')->nullable();
            $table->string('tinNumber')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('acManager')->nullable();
            $table->string('status')->nullable();
            $table->string('acType')->nullable();
            $table->string('role')->nullable();
            $table->string('branch')->nullable();
            $table->string('leadStatus')->nullable();
            $table->string('leadSource')->nullable();
            $table->string('cityzen')->nullable();
            $table->string('country')->nullable();
            $table->string('postCode')->nullable();
            $table->text('address')->nullable();
            $table->string('passIsueBy')->nullable();
            $table->string('bankName')->nullable();
            $table->string('bankAddress')->nullable();
            $table->string('swiftCode')->nullable();
            $table->string('bankAccount')->nullable();
            $table->string('acName')->nullable();
            $table->string('depositorType')->nullable();
            $table->text('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_manages');
    }
};
