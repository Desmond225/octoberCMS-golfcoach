<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseDetails4 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->renameColumn('tee_id', 'tee_color_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->renameColumn('tee_color_id', 'tee_id');
        });
    }
}
