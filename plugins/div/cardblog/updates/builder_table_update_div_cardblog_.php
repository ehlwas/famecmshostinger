<?php namespace div\CardBlog\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateDivCardblog extends Migration
{
    public function up()
{
    Schema::table('div_cardblog_', function($table)
    {
        $table->timestamp('created_at');
        $table->timestamp('updated_at');
    });
}

public function down()
{
    Schema::table('div_cardblog_', function($table)
    {
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
    });
}
}
