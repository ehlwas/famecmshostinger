<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsHero extends Migration
{
    public function up()
{
    Schema::create('div_divcms_hero', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->text('title')->nullable();
        $table->string('description')->nullable();
        $table->string('button_link')->nullable();
        $table->string('button_text')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_hero');
}
}
