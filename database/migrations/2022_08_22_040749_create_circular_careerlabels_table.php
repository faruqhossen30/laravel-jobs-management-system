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
        Schema::create('circular_careerlabels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('circular_id')->constrained('circulars')->onDelete('cascade');
            $table->unsignedBigInteger('career_label_id');
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
        Schema::dropIfExists('circular_careerlabels');
    }
};
