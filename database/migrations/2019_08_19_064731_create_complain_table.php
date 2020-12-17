<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->char('topic',200);
			$table->string('complain',5000);
			$table->char('pic1',100);
			$table->char('pic2',100);
			$table->char('pic3',100);
			$table->char('name',100);
			$table->char('address',200);
			$table->char('tele',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complain');
    }
}
