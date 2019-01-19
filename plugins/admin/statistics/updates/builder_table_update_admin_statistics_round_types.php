<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRoundTypes extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_round_types', function($table)
        {
            $table->integer('holes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_round_types', function($table)
        {
            $table->dropColumn('holes');
        });
    }
}
