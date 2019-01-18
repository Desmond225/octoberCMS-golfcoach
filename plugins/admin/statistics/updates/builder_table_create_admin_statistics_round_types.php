<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsRoundTypes extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_round_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_round_types');
    }
}
