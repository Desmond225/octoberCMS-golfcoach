<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatistics extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('round_id');
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_');
    }
}
