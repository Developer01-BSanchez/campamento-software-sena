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
        Schema::create('reviews',function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('text', 100);
            $table->float('rating',2, 1);
            $$table->foreingId('bootcamp_id')->constrained();
            $$table->foreingId('user_id')->constrained();
            $table->timestamp();
        });
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