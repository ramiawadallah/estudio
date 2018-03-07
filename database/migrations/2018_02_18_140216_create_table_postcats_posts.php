<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostcatsPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('postcats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->enum('stutes',['active','not active'])->default('not active');
            $table->timestamps();
        });

        Schema::create('posts', function(Blueprint $table){

            $table->increments('id');

            $table->integer('postcats_id')->unsigned()->default(1);
            $table->foreign('postcats_id')->references('id')->on('postcats')->onDelete('cascade');
            
            $table->string('title');
            $table->string('uri');

            $table->text('content');
            $table->text('photo')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->enum('stutes',['active','not active'])->default('not active');
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
        //
    }
}
