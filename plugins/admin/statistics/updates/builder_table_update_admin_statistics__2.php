<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatistics2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_', function($table)
        {
            $table->integer('stableford_points')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_', function($table)
        {
            $table->dropColumn('stableford_points');
        });
    }
}
