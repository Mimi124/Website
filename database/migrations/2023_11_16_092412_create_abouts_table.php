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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            //About head
            $table->text('description');
            $table->text('sub_description');
            $table->string('about_image')->required();

            //Mandate
            $table->text('mandate_description');
            $table->string('mandate_sub')->nullable();
            $table->string('mandate_point')->nullable();
            $table->string('mandate_last')->nullable();

            //Arrangement
            $table->text('arrangement_description')->nullable();
            $table->string('arrangement_image')->nullable();

            //Mission
            $table->text('mission_description')->required();

            //Core value
            $table->string('value_1')->nullable();
            $table->string('value_2')->nullable();
            $table->string('value_3')->nullable();
            $table->string('value_4')->nullable();
            $table->string('value_5')->nullable();
            $table->string('value_6')->nullable();

            //Chief Direction
            $table->text('chief_description')->required();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
