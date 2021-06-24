<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday_homes', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('city',50);
            $table->string('state',30);
            $table->string('address',100);
            $table->string('postal_code',10);
            $table->tinyInteger('rooms')->unsigned();
            $table->smallInteger('square_meters')->unsigned();
            $table->boolean('wifi')->default(1);
            $table->boolean('kitchen')->default(1);
            $table->text('description');
            $table->boolean('avaiable')->default(1);
            $table->float('price',7,2);
            $table->tinyInteger('vote')->unsigned();
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
        Schema::dropIfExists('holiday_homes');
    }
}
