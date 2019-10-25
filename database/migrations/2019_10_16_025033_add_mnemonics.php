<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMnemonics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vocabs', function ($table) {
            $table->string('mnemonics');
            $table->int('time_spend');
            $table->mediumText('example');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vocabs', function($table){
            $table->dropColumn('mnemonics');
            $table->dropColumn('example');

        });
    }
}
