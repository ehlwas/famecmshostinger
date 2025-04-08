<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcms2 extends Migration
{
    public function up()
{
    Schema::create('div_divcms_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('type')->nullable();
        $table->string('url')->nullable();
        $table->string('sub_item')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_');
}
}
