<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds extends Migration
{
    public function up()
    {
        Schema::rename('admin_statistics_', 'admin_statistics_rounds');
    }
    
    public function down()
    {
        Schema::rename('admin_statistics_rounds', 'admin_statistics_');
    }
}
