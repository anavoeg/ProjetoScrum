<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('email');
            $table->tinyInteger('type');
            $table->unsignedInteger('notice_id');
            $table->timestamps();
            $table->foreign('notice_id')
            ->references('id')->on('notices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newsletters', function($table)
        {
            $table->dropForeign(['notice_id']);
        });
        Schema::dropIfExists('newsletters');

    }
}
