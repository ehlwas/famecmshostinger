<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsTeam4 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->string('description', 1000)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->string('description', 500)->change();
    });
}
}
