<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBloodRequestsAndOthersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('blood__requests', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });

    Schema::table('notifications', function (Blueprint $table) {
        $table->foreign('donor_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('request_id')->references('id')->on('blood__requests')->onDelete('cascade');
    });

    Schema::table('donations', function (Blueprint $table) {
        $table->foreign('donor_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('request_id')->references('id')->on('blood__requests')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blood_requests', function (Blueprint $table) {
            //
        });
    }
}
