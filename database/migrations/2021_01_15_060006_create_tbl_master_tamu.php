<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMasterTamu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_master_tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 100);
            $table->string('nama', 100);
            $table->string('alamat', 255);
            $table->string('keperluan', 255);
            $table->string('no_hp', 100);
            $table->date('tanggal');
            $table->string('foto', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_master_tamu');
    }
}
