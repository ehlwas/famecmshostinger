<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsTeam extends Migration
{
    public function up()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->integer('category')->nullable();
    });
}

public function down()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->dropColumn('category');
    });
}
}
