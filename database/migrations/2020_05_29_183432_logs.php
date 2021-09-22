<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Logs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aal_id');
            $table->foreign('aal_id')->references('id')->on('a_a_l_s');
            $table->text('connection_status');
            $table->date('date');
            $table->date('date_last_disconnection');
            $table->date('date_last_update_IP');
            $table->date('date_last_update_token');
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
        //
    }
}
