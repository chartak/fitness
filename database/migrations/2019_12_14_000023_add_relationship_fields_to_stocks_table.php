<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStocksTable extends Migration
{
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->unsignedInteger('branch_id');

            $table->foreign('branch_id', 'branch_fk_707708')->references('id')->on('contact_contacts');

            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('team_id', 'team_fk_730995')->references('id')->on('teams');
        });
    }
}
