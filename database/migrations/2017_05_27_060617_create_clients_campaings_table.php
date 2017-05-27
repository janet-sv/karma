<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_campaings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaing_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('code')->nullable();
            $table->string('qr_file')->nullable();
            $table->char('used')->nullable();
            $table->timestamps();

            $table->foreign('campaing_id')->references('id')->on('campaings');
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
        Schema::dropIfExists('clients_campaings');
    }
}
