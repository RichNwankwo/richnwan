<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the contact table
        Schema::create('contact', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->longText('message');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the contact table
        Schema::drop('contact');
    }
}
