<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadMoveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bad_moves', function(Blueprint $table){
            $table->string('kif_id');
            $table->integer('move_num');
            $table->integer('best_score');
            $table->integer('actual_score');
            $table->integer('diff_score');
            $table->string('sfen');
            $table->string('flipped_sfen');
            $table->string('actual_move');
            $table->text('pv');
            $table->timestamps();
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bad_moves');
    }
}
