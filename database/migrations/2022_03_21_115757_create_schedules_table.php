<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            // $table->date('date');
            $table->string('schedule_date');
            $table->longText('details');
            // $table->date('starting_time');
            $table->string('machine_id');
            // $table->string('medicine_id');
            $table->foreignId('demand_details_id')->constrained('demand_medicines')->cascadeOnDelete();
            $table->string('hour');
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
        Schema::dropIfExists('schedules');
    }
}
