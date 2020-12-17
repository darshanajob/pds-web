<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
			$table->string('name',100);
			$table->char('img',200);	
			$table->boolean('is_acitve')->default(0);//Default 0		
			$table->tinyInteger('role_id'); //1=admin, 2=officer, 3=member, 4=gs, 5=supplier 
			$table->tinyInteger('user_no'); //This is 'id' taken from officer, member, gs, supplier tables
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
        Schema::dropIfExists('users');
    }
}
