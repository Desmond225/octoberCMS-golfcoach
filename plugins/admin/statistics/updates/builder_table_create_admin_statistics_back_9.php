<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsBack9 extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_back_9', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('course_part');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_back_9');
    }
}
