<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwentytwentyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twentytwenty', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('page_id');
                $table->string('before');
                $table->string('beforeLabel')->nullable();
                $table->string('after');
                $table->string('afterLabel')->nullable();
                $table->decimal('offset',2,1)->nullable();
                $table->boolean('status');

                $table->foreign('page_id')
                ->references('id')->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twentytwenty');
    }
}
