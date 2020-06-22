<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedTinyInteger('language_id');
            $table->string('name');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('meta_keywords');
            $table->longText('meta_description');
            $table->string('meta_robots');
            $table->boolean('status');


            $table->unique(['slug','language_id','parent_id']);

            $table->foreign('parent_id')
            ->references('id')->on('pages');
            $table->foreign('language_id')
            ->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
