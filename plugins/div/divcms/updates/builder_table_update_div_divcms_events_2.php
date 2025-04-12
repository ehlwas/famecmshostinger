<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsEvents2 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_events', function($table)
    {
        $table->text('description')->nullable()->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_events', function($table)
    {
        $table->string('description')->nullable()->unsigned(false)->default(null)->change();
    });
}
}
