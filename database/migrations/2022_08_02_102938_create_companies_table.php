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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            // Basic Info
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('edit_user_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->string('email');
            $table->boolean('status')->default('1');
            $table->string('address');
            $table->string('logo')->nullable();
            // Additional Info
            $table->string('ceo_name')->nullable();
            $table->integer('mobile')->nullable();
            $table->unsignedBigInteger('ownership_type')->nullable();
            $table->unsignedBigInteger('division_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->json('industry')->nullable();
            $table->integer('total_office')->nullable();
            $table->integer('employ_range')->nullable();
            $table->dateTime('establish')->nullable();
            // Company Link
            $table->string('google_map')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();

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
        Schema::dropIfExists('companies');
    }
};
