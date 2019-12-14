<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClubCartsTable extends Migration
{
    public function up()
    {
        Schema::table('club_carts', function (Blueprint $table) {
            $table->unsignedInteger('branch_id');

            $table->foreign('branch_id', 'branch_fk_707706')->references('id')->on('contact_contacts');

            $table->unsignedInteger('team_id')->nullable();

            $table->foreign('team_id', 'team_fk_730985')->references('id')->on('teams');
        });
    }
}
