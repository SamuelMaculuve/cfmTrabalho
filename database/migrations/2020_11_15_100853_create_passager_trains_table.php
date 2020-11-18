<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagerTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passager_trains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id')->nullable();
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');

            $table->unsignedBigInteger('passager_id')->nullable();
            $table->foreign('passager_id')->references('id')->on('passagers')->onDelete('cascade');
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
        Schema::dropIfExists('passager_trains');
    }
}
