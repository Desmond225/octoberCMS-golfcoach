<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseVenues extends Migration
{
    public function up()
    {
        Schema::rename('admin_statistics_courses', 'admin_statistics_course_venues');
        Schema::table('admin_statistics_course_venues', function($table)
        {
            $table->dropColumn('par');
        });
    }
    
    public function down()
    {
        Schema::rename('admin_statistics_course_venues', 'admin_statistics_courses');
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->integer('par')->nullable()->unsigned();
        });
    }
}
