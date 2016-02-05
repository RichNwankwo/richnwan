<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create
        Schema::create('projects', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('description', 400);
            $table->string('link');
            $table->string('github_link');
            $table->tinyInteger('active');
            $table->nullableTimestamps();
        });

        Schema::table('projects', function(Blueprint $table){
            $table->index('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drops the schema table
        Schema::drop('projects');
    }
}
