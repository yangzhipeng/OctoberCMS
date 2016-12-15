<?php namespace word\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWordMessageJiandu4 extends Migration
{
    public function up()
    {
        Schema::table('word_message_jiandu', function($table)
        {
            $table->text('reply_content')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('word_message_jiandu', function($table)
        {
            $table->text('reply_content')->default(null)->change();
        });
    }
}
