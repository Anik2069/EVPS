<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoterinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voterinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('option');
            $table->string('nid');
            $table->string('fname');
            $table->string('mname');
            $table->string('address');
            $table->string('image');
            $table->string('like');

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
        Schema::dropIfExists('voterinfos');
    }
}
