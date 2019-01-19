<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsStats extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_stats', function($table)
        {
            $table->smallInteger('name');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_stats', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
