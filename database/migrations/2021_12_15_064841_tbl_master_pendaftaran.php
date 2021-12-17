<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblMasterPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_master_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 255)->nullable();
              $table->string('nama', 255)->nullable();
            $table->string('nopol', 100)->nullable();
            $table->string('merk', 255)->nullable();
            $table->string('tahun', 4)->nullable();
            $table->string('no_rangka', 100)->nullable();
            $table->string('no_mesin', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_master_pendaftaran');
    }
}
