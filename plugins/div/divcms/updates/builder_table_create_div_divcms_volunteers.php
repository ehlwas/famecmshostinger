<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsVolunteers extends Migration
{
    public function up()
{
    Schema::create('div_divcms_volunteers', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('description')->nullable();
        $table->string('image')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_volunteers');
}
}
