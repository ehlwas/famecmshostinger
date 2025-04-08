<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteDivDivcms extends Migration
{
    public function up()
{
    Schema::dropIfExists('div_divcms_');
}

public function down()
{
    Schema::create('div_divcms_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('category')->nullable();
    });
}
}
