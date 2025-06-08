<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDivDivcmsContactNumber extends Migration
{
    public function up()
{
    Schema::create('div_divcms_contact_number', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
        $table->string('contact_num')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('div_divcms_contact_number');
}
}
