<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseParts2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_parts', function($table)
        {
            $table->string('course_part_2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_parts', function($table)
        {
            $table->dropColumn('course_part_2');
        });
    }
}
