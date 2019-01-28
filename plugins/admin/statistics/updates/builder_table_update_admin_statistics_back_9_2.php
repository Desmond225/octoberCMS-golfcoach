<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsBack92 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_back_9', function($table)
        {
            $table->string('back_9');
            $table->dropColumn('course_part');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_back_9', function($table)
        {
            $table->dropColumn('back_9');
            $table->string('course_part', 191);
        });
    }
}
