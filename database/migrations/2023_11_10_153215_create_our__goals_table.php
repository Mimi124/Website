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
        Schema::create('our__goals', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title')->required();
            $table->string('subtitle')->required();
            $table->text('description')->required();
            $table->string('button_link')->required();
            $table->string('vision')->required();
            $table->text('vision_des')->required();
            $table->string('leadership')->required();
            $table->text('leadership_des')->required();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our__goals');
    }
};
