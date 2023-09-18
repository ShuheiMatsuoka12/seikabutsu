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
        Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->string('title', 20);
        $table->string('content', 100);
        $table->string('category');
        $table->float('rating');
        
        $table->foreignId('reviewer_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreignId('reviewed_id')->references('id')->on('users')->onDelete('cascade');

        });
        
        
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
