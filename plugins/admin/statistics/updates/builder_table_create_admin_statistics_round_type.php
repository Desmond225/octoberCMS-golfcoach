<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsRoundType extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_round_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('round_type')->nullable();
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_round_type');
    }
}
