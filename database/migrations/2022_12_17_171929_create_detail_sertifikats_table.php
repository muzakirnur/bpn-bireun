<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sertifikats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sertifikat_id')->constrained();
            $table->integer('nomor');
            $table->string('desa');
            $table->date('tgl_berakhir_hak');
            $table->string('nib');
            $table->string('asal_hak');
            $table->foreignId('dasar_pendaftaran_id')->constrained();
            $table->foreignId('surat_ukur_id')->constrained();
            $table->string('penunjuk');
            $table->foreignId('pemegang_hak_id')->constrained();
            $table->foreignId('pembukuan_id')->constrained();
            $table->foreignId('penerbitan_sertifikat_id')->constrained();
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
        Schema::dropIfExists('detail_sertifikats');
    }
}
