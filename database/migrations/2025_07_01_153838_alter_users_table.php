<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Users', function (Blueprint $table) {
            //
            $table->string('phone');
            $table->string('blood_group');
            $table->string('location');
            $table->float('latitude');
            $table->float('longitude');
            $table->date('last_donated');
            $table->enum('role',['donor', 'recipient']);
            $table->boolean('is_available');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Users', function (Blueprint $table) {
            //
        });
    }
}
