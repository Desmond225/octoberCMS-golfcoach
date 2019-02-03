<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds22 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->integer('fir')->unsigned();
            $table->integer('gir')->unsigned();
            $table->integer('putts')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->dropColumn('fir');
            $table->dropColumn('gir');
            $table->dropColumn('putts');
        });
    }
}
