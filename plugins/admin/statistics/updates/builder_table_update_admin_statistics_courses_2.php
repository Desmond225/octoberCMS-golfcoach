<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourses2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->integer('course_id')->nullable()->unsigned();
            $table->integer('par')->nullable()->unsigned();
            $table->integer('length')->nullable()->unsigned();
            $table->decimal('sr', 10, 0)->nullable();
            $table->decimal('cr', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->dropColumn('course_id');
            $table->dropColumn('par');
            $table->dropColumn('length');
            $table->dropColumn('sr');
            $table->dropColumn('cr');
        });
    }
}
