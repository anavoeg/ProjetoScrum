<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_product');
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('id_product')
            ->references('id')->on('product')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy');
        $table->dropForeign(['id_user']);
        $table->dropForeign(['id_product']);
    }
}
