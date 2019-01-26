<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourses8 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->renameColumn('course', 'course_part');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->renameColumn('course_part', 'course');
        });
    }
}
