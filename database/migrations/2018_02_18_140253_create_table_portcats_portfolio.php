<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePortcatsPortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('portcats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->text('image');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->enum('stutes',['active','not active'])->default('not active');
            $table->timestamps();
        });

        Schema::create('portfolios', function(Blueprint $table){
            $table->increments('id');

            $table->integer('portcats_id')->unsigned()->default(1);
            $table->foreign('portcats_id')->references('id')->on('portcats')->onDelete('cascade');

            $table->text('image')->nullable();

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
