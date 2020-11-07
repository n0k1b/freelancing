<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHireInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hire_from')->unsigned();
            $table->bigInteger('hire_to')->unsigned();
            $table->bigInteger('gig_id')->unsigned();
            $table->string('proposed_hired_day');
            $table->string('proposed_hired_budget');
            $table->string('proposed_message');
            $table->integer('accept_status');
            $table->integer('complete_status')->default('0');
            $table->timestamps();

            $table->foreign('hire_from')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hire_to')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hire_informations');
    }
}
