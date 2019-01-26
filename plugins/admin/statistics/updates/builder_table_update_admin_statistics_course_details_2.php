<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseDetails2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->integer('length')->nullable()->unsigned();
            $table->decimal('cr', 10, 0)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->dropColumn('length');
            $table->smallInteger('cr')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
