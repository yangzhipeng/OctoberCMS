<?php namespace word\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWordMessageJiandu3 extends Migration
{
    public function up()
    {
        Schema::table('word_message_jiandu', function($table)
        {
            $table->text('reply_content')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('word_message_jiandu', function($table)
        {
            $table->text('reply_content')->nullable(false)->change();
        });
    }
}
