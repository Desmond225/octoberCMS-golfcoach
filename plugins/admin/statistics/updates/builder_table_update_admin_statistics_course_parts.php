<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseParts extends Migration
{
    public function up()
    {
        Schema::rename('admin_statistics_courses', 'admin_statistics_course_parts');
    }
    
    public function down()
    {
        Schema::rename('admin_statistics_course_parts', 'admin_statistics_courses');
    }
}
