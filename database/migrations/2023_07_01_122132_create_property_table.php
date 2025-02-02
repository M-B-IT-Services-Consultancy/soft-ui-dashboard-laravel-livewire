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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('house_name')->nullable(); //house_name or house_number
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('street_name')->nullable(); //house_street
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('added_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
