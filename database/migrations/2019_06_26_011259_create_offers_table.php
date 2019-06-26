<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('product_demand_id'); // Id producto demandado incialmente (tabla productos)
            $table->bigInteger('product_offered_id')->nullable(); // Id producto contraoferta (tabla productos)
            $table->tinyInteger('active')->default(1)->nullable();
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
        Schema::dropIfExists('offers');
    }
}
