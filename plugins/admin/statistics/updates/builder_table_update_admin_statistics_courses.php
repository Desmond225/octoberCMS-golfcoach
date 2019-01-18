<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourses extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->string('name')->nullable();
            $table->integer('par')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('par');
        });
    }
}
