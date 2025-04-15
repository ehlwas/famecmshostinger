<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsClasses4 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->text('header_description')->nullable()->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_classes', function($table)
    {
        $table->string('header_description', 255)->nullable()->unsigned(false)->default(null)->change();
    });
}
}
