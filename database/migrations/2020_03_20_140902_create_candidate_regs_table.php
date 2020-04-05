<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('pass');
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('bday');
            $table->string('cname');
            $table->string('cposition');

            $table->string('address');

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
        Schema::dropIfExists('candidate_regs');
    }
}
