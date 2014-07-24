<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->text("parent_department");
            $table->text("organisation");
            $table->text("unit");
            $table->text("reporting_senior_post");
            $table->text("grade");
            $table->integer("payscale_minimum");
            $table->integer("payscale_maximum");
            $table->text("generic_job_title");
            $table->text("posts_in_fte");
            $table->text("profession");
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('data');

	}

}
