<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('date');
            $table->string('title');

            $table->string('content');

            $table->string('content1');

            $table->string('image')->nullable();
            $table->string('position');
            $table->string('deadline');

            $table->string('votingdate');
            $table->string('creator');
            $table->string('t1');
            $table->string('t2');




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
        Schema::dropIfExists('posts');
    }
}
