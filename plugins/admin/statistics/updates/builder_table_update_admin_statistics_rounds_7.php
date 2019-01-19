<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds7 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->dropColumn('holes_played');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->integer('holes_played')->nullable();
        });
    }
}
