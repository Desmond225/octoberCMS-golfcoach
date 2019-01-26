<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseVenues2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_venues', function($table)
        {
            $table->renameColumn('name', 'course_venue');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_venues', function($table)
        {
            $table->renameColumn('course_venue', 'name');
        });
    }
}
