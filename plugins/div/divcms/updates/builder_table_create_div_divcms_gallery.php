<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsGallery extends Migration
{
    public function up()
{
    Schema::create('div_divcms_gallery', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('title')->nullable();
        $table->string('gallery_path')->nullable();
        $table->string('slug_gallery')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_gallery');
}
}
