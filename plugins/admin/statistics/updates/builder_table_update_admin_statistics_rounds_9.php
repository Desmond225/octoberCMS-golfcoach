<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds9 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->renameColumn('holes_played', 'holes_played_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->renameColumn('holes_played_id', 'holes_played');
        });
    }
}
