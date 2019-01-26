<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds11 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->integer('course_part_id')->unsigned();
            $table->decimal('handicap_old', 10, 0)->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->dropColumn('course_part_id');
            $table->decimal('handicap_old', 10, 0)->unsigned()->change();
        });
    }
}
