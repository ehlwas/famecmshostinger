<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsClasses extends Migration
{
    public function up()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->string('slug')->nullable();
    });
}

public function down()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->dropColumn('slug');
    });
}
}
