<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsTestimonials extends Migration
{
    public function up()
{
    Schema::create('div_divcms_testimonials', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name')->nullable();
        $table->string('message', 900)->nullable();
        $table->integer('star')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_testimonials');
}
}
