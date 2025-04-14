<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsClasses extends Migration
{
    public function up()
{
    Schema::create('div_divcms_classes', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('header_title')->nullable();
        $table->string('header_description')->nullable();
        $table->text('rich_text')->nullable();
        $table->string('photo_album')->nullable();
        $table->boolean('show_on_home')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_classes');
}
}
