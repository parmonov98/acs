<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ministry_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('operator_id');
            $table->string('name');
            $table->string('image');
            $table->string('website');
            $table->string('address');
            $table->string('phone');
            $table->timestamps();

            $table->index('director_id');
            $table->index('ministry_id');
            $table->index('parent_id');
            $table->index('operator_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
