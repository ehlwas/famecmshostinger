<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsTeam3 extends Migration
{
    public function up()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->string('description', 500)->change();
    });
}

public function down()
{
    Schema::table('div_divcms_team', function($table)
    {
        $table->string('description', 255)->change();
    });
}
}
