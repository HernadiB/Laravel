<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string("isbn", 13)->primary();
            $table->string("title", 50);
            $table->string("title_original", 50)->nullable();
            $table->string("author", 30)->nullable();
            $table->integer("episode")->nullable();
            $table->string("series", 30)->nullable();
            $table->integer("pages");
            $table->string("publisher", 30);
            $table->string("translator", 30)->nullable();
            $table->string("category", 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
