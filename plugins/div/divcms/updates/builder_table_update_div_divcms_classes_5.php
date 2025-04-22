<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsClasses5 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->integer('show_on_home')->nullable()->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->string('show_on_home', 255)->nullable()->unsigned(false)->default(null)->change();
    });
}
}
