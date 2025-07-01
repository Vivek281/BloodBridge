<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood__requests', function (Blueprint $table) {
            $table->bigIncrements('id')->Primary();
            $table->integer('user_id');
            $table->string('blood_group');
            $table->integer('units');
            $table->enum('urgency_level',['low', 'medium', 'high']);
            $table->string('hospital_name');
            $table->string('location');
            $table->float('latitude');
            $table->float('longitude');
            $table->enum('status',['active', 'fulfilled', 'cancelled']);
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
        Schema::dropIfExists('blood__requests');
    }
}
