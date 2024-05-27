<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Primary key (unsignedBigInteger)
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone_number', 20)->nullable(); // Increase length to 20
            $table->decimal('salary', 10, 2);
            $table->unsignedBigInteger('department_id')->nullable();
            $table->timestamps();

            // Define foreign key
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
