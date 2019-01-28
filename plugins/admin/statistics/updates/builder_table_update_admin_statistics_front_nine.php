<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsFrontNine extends Migration
{
    public function up()
    {
        Schema::rename('admin_statistics_course_parts', 'admin_statistics_front_nine');
        Schema::table('admin_statistics_front_nine', function($table)
        {
            $table->renameColumn('course_part', 'front_nine');
        });
    }
    
    public function down()
    {
        Schema::rename('admin_statistics_front_nine', 'admin_statistics_course_parts');
        Schema::table('admin_statistics_course_parts', function($table)
        {
            $table->renameColumn('front_nine', 'course_part');
        });
    }
}
