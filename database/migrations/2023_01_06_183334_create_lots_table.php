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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string('lot');
            $table->longText('comment');
            $table->integer('price_prod');
            $table->date('sample_date');
            $table->date('live_date');
            $table->date('warehouse_date');
            $table->unsignedBigInteger('bayer_id')->index();
            $table->foreign('bayer_id')->references('id')->on('bayers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('designer_id')->index();
            $table->foreign('designer_id')->references('id')->on('designers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('ptm_dict_id')->index();
            $table->foreign('ptm_dict_id')->references('id')->on('ptm_dict')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('manufacturer_id')->index();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('lots');
    }
};
