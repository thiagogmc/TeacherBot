<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_bots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_users_bots_user')
                  ->references('id')
                  ->on('users');
            $table->unsignedInteger('bot_id');
            $table->foreign('bot_id', 'fk_users_bots_bots')
                  ->references('id')
                  ->on('bots');
            $table->timestamps();
        });
        Schema::table('bots', function (Blueprint $table) {
            $table->dropForeign('fk_bots_user');
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_bots');
        $table->unsignedInteger('user_id');
        $table->foreign('user_id', 'fk_bots_user')
              ->references('id')
              ->on('users');
    }
}
