<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Theatre;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('categories_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            //$table->foreignId('categories_id')->constrained()->onDelete('cascade');
            $table->string('video_url');
            $table->string('cast');
            $table->boolean('status')->default(true);
            $table->boolean('trending')->default(true);
            $table->string('released_date');
            $table->string('description');
            $table->string('pg');
            $table->integer('rating')->default(5);
            $table->string('image');
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
        Schema::dropIfExists('movies');
    }
};
