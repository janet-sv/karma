<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAlter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('edad')->nullable();
            $table->string('distrito')->nullable();
            $table->boolean('sexo')->nullable();
            $table->integer('points')->default(0);
            $table->integer('available_time')->nullable();
            $table->integer('maximum_effort')->nullable();
            $table->integer('maximum_distance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('edad');
            $table->dropColumn('distrito');
            $table->dropColumn('sexo');
            $table->dropColumn('points');
            $table->dropColumn('available_time');
            $table->dropColumn('maximum_effort');
            $table->dropColumn('maximum_distance');
        });
    }
}
