<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseDetails5 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->integer('course_part_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->dropColumn('course_part_id');
        });
    }
}
