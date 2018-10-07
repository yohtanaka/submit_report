<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments ('id');
            $table->integer    ('user_id') ->comment('ユーザID')->unsigned();
            $table->date       ('date')    ->comment('報告日');
            $table->tinyInteger('train')   ->comment('0: 車移動, 1: 電車移動')->default(0);
            $table->integer    ('distance')->comment('走行距離')->unsigned();
            $table->string     ('area')    ->comment('エリア');
            $table->text       ('shops')   ->comment('店舗');
            $table->text       ('body')    ->comment('本文');
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
