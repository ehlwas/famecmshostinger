<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcms extends Migration
{
    public function up()
{
    Schema::create('div_divcms_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('category')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_');
}
}
