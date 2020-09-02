<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->id('ID_P');
            $table->string('titre');
            $table->string('contenu');
            $table->string('dates');
            $table->unsignedBigInteger('ID_U');
            $table->timestamps();

            $table->foreign('ID_U')->references('ID_U')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
