<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTypeOfTrainersTable extends Migration
{
    public function up()
    {
        Schema::table('type_of_trainers', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('team_id', 'team_fk_730987')->references('id')->on('teams');
        });
    }
}
