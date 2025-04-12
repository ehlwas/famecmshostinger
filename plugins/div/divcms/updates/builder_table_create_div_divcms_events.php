<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsEvents extends Migration
{
    public function up()
{
    Schema::create('div_divcms_events', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->string('description')->nullable();
        $table->dateTime('event_date')->nullable();
        $table->string('gallery_name')->nullable();
        $table->string('img_poster')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_events');
}
}
