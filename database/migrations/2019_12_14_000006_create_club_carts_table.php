<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubCartsTable extends Migration
{
    public function up()
    {
        Schema::create('club_carts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('timeto')->nullable();

            $table->string('timefrom');

            $table->integer('duration');

            $table->string('year_from')->nullable();

            $table->string('year_to')->nullable();

            $table->boolean('status')->default(0)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
