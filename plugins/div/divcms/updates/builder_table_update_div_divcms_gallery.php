<?php namespace div\DivCms\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivDivcmsGallery extends Migration
{
    public function up()
{
    Schema::table('div_divcms_gallery', function($table)
    {
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::table('div_divcms_gallery', function($table)
    {
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
        $table->dropColumn('deleted_at');
    });
}
}
