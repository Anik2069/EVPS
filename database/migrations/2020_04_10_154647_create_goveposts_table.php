<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goveposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('title');
            $table->string('content1');
            $table->string('election');

            $table->string('image');
            $table->string('position');
            $table->string('date2');
            $table->string('vdate');
            $table->string('vtime');

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
        Schema::dropIfExists('goveposts');
    }
}
