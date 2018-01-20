<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create new column slug in table Posts
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->unique()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Delete column slug in table Posts
        Schema::table('posts', function(Blueprint $table){
          $table->dropColumn('slug');
        });
    }
}
