<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContentTagsTable extends Migration
{
    public function up()
    {
        Schema::table('content_tags', function (Blueprint $table) {
            $table->unsignedInteger('branch_id')->nullable();

            $table->foreign('branch_id', 'branch_fk_724911')->references('id')->on('contact_contacts');
        });
    }
}
