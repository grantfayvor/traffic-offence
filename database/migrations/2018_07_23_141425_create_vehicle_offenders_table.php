<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleOffendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_offenders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_number');
            $table->string('vehicle_owner'); //
            $table->string('vehicle_name');//
            $table->string('vehicle_make');//
            $table->string('vehicle_model');//
            $table->string('vehicle_type');//
            $table->integer('vehicle_chasis');//
            $table->integer('vehicle_insurance');//
            $table->string('vehicle_state_of_purchase');//
            $table->integer('crime_id')->unsigned(); //added this
            // $table->string('crime_type');
            $table->timestamp('crime_date'); //
            $table->string('crime_place');// 
            $table->string('crime_route');//
            $table->string('owners_phone'); //
            $table->string('owners_address');//
            // $table->double('penalty');//
            $table->string('assaulted_official');
            $table->string('offenders_passport');
            // $table->string('crime_picture');
            $table->timestamps();
            $table->foreign('crime_id')
                ->references('id')
                ->on('crimes')
                ->onUpdate('cascade')
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
        //
    }
}
