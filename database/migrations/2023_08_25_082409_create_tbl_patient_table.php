<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('tbl_patient', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('date_of_birth')->nullable();
        $table->unsignedBigInteger('gender_id')->default(1);
        $table->unsignedBigInteger('service_id')->default(1);
      
        $table->timestamps();

        
        $table->foreign('gender_id')->references('id')->on('tbl_gender');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_patient');
    }
}
