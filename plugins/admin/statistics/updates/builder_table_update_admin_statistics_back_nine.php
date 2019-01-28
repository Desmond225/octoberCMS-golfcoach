<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsBackNine extends Migration
{
    public function up()
    {
        Schema::rename('admin_statistics_back_9', 'admin_statistics_back_nine');
        Schema::table('admin_statistics_back_nine', function($table)
        {
            $table->string('back_9')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('admin_statistics_back_nine', 'admin_statistics_back_9');
        Schema::table('admin_statistics_back_9', function($table)
        {
            $table->string('back_9', 191)->change();
        });
    }
}
