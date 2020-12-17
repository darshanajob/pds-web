<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOfficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_officer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->char('name',200);			
			$table->boolean('gender');//0=Male, 1=Female		
			$table->boolean('civilstatus');//0=Married, 1=Unmarried		
			$table->char('nic',12);			
			$table->string('email')->unique();
			$table->smallInteger('dtype');//Comming from user_duty_type table
			$table->char('tpLand',10);	
			$table->char('tpMobile',10);	
			$table->char('address',200);			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_officer');
    }
}
