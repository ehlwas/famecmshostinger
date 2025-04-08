<?php namespace div\CardBlog\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivCardblog extends Migration
{
    public function up()
{
    Schema::create('div_cardblog_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title', 255);
        $table->string('description', 255);
        $table->string('link', 255);
    });
}

public function down()
{
    Schema::dropIfExists('div_cardblog_');
}
}
