<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->char('name',200);			
			$table->char('type',5);		
			$table->char('path',200);		
			$table->tinyInteger('category'); //1=application, 2=gazette
            $table->tinyInteger('medium');	//1=sinhala, 2=tamil, 3=english
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
    }
}
