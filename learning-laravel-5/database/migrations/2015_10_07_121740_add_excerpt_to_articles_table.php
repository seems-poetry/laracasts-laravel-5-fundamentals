<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExcerptToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    /**
    
    *   Created with the command

    *   php artisan make:migration add_excerpt_to_articles_table --table="articles"

    */




    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            
            $table->text('excerpt')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            
            $table->dropColumn('excerpt');

        });
    }
}
