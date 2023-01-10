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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('movie_id');
           // $table->unsignedBigInteger('theatre_id');
           $table->foreignId('movie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
           $table->foreignId('theatre_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

           $table->double('price');
            $table->string('time');
            $table->string('date');
            $table->integer('available_seats');
            // $table->date('start_date');
            // $table->boolean('running_status');
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
        Schema::dropIfExists('shows');
    }
};
