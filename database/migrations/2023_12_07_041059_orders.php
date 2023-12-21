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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->startingValue('1001');
            $table->timestamp('Order_Date');
            $table->integer('Order_Amount');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('movies_id')->unsigned()->index();
            $table->string("movie_name");
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
