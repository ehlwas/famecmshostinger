<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsPartners extends Migration
{
    public function up()
{
    Schema::create('div_divcms_partners', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('img_path')->nullable();
        $table->string('type')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_partners');
}
}
