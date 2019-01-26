<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseDetails6 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->dropColumn('course_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->integer('course_id')->nullable()->unsigned();
        });
    }
}
