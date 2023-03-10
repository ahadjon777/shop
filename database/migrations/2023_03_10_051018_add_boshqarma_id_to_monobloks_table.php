<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monobloks', function (Blueprint $table) {
            $table->foreignId('boshqarma_id');
            $table->foreign('boshqarma_id')->references('id')->on('boshqarmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monobloks', function (Blueprint $table) {
            $table->dropColumn('boshqarma_id');
        });
    }
};
