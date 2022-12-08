<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMaterijalInTableNecklaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('necklaces', function (Blueprint $table) {
            $table->renameColumn('materijal', 'vrsta_materijala');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('necklaces', function (Blueprint $table) {
            $table->renameColumn('vrsta_materijala', 'materijal');
        });
    }
}
