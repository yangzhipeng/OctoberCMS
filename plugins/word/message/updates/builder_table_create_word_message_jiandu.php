<?php namespace word\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWordMessageJiandu extends Migration
{
    public function up()
    {
        Schema::create('word_message_jiandu', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('sender', 255);
            $table->string('subject', 255);
            $table->text('content');
            $table->dateTime('create_datetime');
            $table->text('reply_content');
            $table->dateTime('reply_datetime')->nullable();
            $table->smallInteger('is_closed');
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->timestamp();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('word_message_jiandu');
    }
}
