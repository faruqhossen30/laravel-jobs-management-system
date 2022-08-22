<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circulars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('thumbnail')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();
            // Attribute
            $table->unsignedBigInteger('category_id')->nullable();
            // $table->json('education')->nullable();
            // $table->json('skill')->nullable();
            // $table->json('job_industry')->nullable();
            // $table->json('career_label')->nullable();
            // $table->json('salary_period')->nullable();
            // $table->json('job_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            // Organization Info
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('organization_website')->nullable();
            $table->string('apply_link')->nullable();
            $table->string('vacancy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('circulars');
    }
};
