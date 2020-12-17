<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_gs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->char('name',200);			
			$table->boolean('gender');//0=Male, 1=Female		
			$table->boolean('civilstatus');//1=Married, 0=Unmarried		
			$table->char('nic',12);			
			$table->string('email',200)->unique();
			$table->smallInteger('gsdivision');//Comming from gs_division table
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
        Schema::dropIfExists('user_gs');
    }
}
