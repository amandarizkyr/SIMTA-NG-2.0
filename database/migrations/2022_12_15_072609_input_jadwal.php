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
        Schema::create('inputjadwal', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama');
            $table->string('nrp');
            $table->string('lab');
            $table->string('dospem1');
            $table->string('dospem2');
            $table->string('dosji1');
            $table->string('dosji2');
            $table->string('hari');
            $table->date('tgl');
            $table->string('ruang');
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
};
