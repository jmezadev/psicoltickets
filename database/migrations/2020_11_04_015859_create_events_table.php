<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nulleable();
            $table->string('image')->nulleable();
            $table->string('country')->default('Colombia');
            $table->string('city')->default('Cali');
            $table->string('address')->nulleable();
            $table->integer('total_tickets')->default(1);
            $table->datetime('datetime');
            $table->datetime('open_doors_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
