<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ptm_dict_id')->index();
            $table->integer('month');
            $table->integer('year');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('ptm_dict_id')->references('id')->on('ptm_dict')->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ptm');
    }
};
