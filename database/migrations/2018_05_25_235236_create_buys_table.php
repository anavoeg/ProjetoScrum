<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_product');
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')->on('users');
            $table->foreign('id_product')
            ->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buys', function($table)
        {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_product']);
        });
        Schema::dropIfExists('buys');

    }
}
