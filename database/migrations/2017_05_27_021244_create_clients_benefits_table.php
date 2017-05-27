<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('benefit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('qr_file')->nullable();
            $table->timestamps();

            $table->foreign('benefit_id')->references('id')->on('benefits');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_benefits');
    }
}
