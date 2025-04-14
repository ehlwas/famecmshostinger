<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsClasses2 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->string('img_poster')->nullable();
    });
}

public function down()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->dropColumn('img_poster');
    });
}
}
