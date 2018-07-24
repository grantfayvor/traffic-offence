<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->create_road_safety_offences_table();
        Schema::create('crimes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offence_id')->unsigned();
            $table->string('crime_picture');
            $table->timestamps();
            $table->foreign('offence_id')
                ->references('id')
                ->on('road_safety_offences')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    private function create_road_safety_offences_table()
    {
        Schema::create('road_safety_offences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('code', 50)->unique();
            $table->integer('point')->unsigned();
            $table->double('penalty');
            $table->integer('category');
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
