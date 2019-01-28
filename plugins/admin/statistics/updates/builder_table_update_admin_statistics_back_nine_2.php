<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsBackNine2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_back_nine', function($table)
        {
            $table->string('back_nine');
            $table->dropColumn('back_9');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_back_nine', function($table)
        {
            $table->dropColumn('back_nine');
            $table->string('back_9', 191);
        });
    }
}
