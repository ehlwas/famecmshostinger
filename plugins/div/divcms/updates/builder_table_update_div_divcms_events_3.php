<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsEvents3 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_events', function($table)
    {
        $table->text('event_details')->nullable();
        $table->string('description')->nullable()->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_events', function($table)
    {
        $table->dropColumn('event_details');
        $table->text('description')->nullable()->unsigned(false)->default(null)->change();
    });
}
}
