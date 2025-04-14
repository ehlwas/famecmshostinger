<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsFeaturedIn extends Migration
{
    public function up()
{
    Schema::create('div_divcms_featured_in', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->string('image')->nullable();
        $table->string('type')->nullable();
        $table->string('url_link')->nullable();
        $table->string('image_link')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_featured_in');
}
}
