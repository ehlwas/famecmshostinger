<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsNavigation extends Migration
{
    public function up()
{
    Schema::rename('div_divcms_', 'div_divcms_navigation');
}

public function down()
{
    Schema::rename('div_divcms_navigation', 'div_divcms_');
}
}
