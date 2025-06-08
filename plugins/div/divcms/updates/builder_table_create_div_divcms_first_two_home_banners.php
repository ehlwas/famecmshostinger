<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsFirstTwoHomeBanners extends Migration
{
    public function up()
{
    Schema::create('div_divcms_first_two_home_banners', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->integer('banner_index')->nullable();
        $table->string('button_one')->nullable();
        $table->string('button_two')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_first_two_home_banners');
}
}
