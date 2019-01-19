<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsStats2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_stats', function($table)
        {
            $table->string('name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_stats', function($table)
        {
            $table->smallInteger('name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
