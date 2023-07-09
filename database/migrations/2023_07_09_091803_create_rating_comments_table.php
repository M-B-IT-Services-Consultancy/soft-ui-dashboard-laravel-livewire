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
        Schema::create('rating_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('rating_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->string('rating_user_name')->nullable();
            $table->string('rating_user_email')->nullable();
            $table->string('rating_comment')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('rating_comments');
    }
};
