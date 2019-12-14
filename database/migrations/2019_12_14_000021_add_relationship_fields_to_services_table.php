<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToServicesTable extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->unsignedInteger('branch_id');

            $table->foreign('branch_id', 'branch_fk_707703')->references('id')->on('contact_contacts');

            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('team_id', 'team_fk_730989')->references('id')->on('teams');
        });
    }
}
