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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users'); //->references('id')->on('users');
            $table->foreignId('city_id')->references('id')->on('cities'); 
            $table->foreignId('company_id')->references('id')->on('companies'); 

            $table->string('name');
            $table->decimal('budget', 20, 2);
            $table->boolean('is_active');
            $table->date('execution_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
