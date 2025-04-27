<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsHero extends Migration
{
    public function up()
{
    Schema::table('div_divcms_hero', function($table)
    {
        $table->string('hero_img')->nullable();
    });
}

public function down()
{
    Schema::table('div_divcms_hero', function($table)
    {
        $table->dropColumn('hero_img');
    });
}
}
