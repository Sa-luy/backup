<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');

            $table->foreign('users_id')->references('id')->on('users');
            $table->string('phone',12);
            $table->string('delivery_address',255);
            $table->string('note',255)->nullable();
            $table->enum('status', ['finished', 'unfinished']);
            $table->date('delivery');
            $table->string('total_money');

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
        Schema::dropIfExists('oders');
    }
}
