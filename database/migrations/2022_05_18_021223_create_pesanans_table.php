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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id');
            $table->string('cek_in');
            $table->string('cek_out');
            $table->integer('jml_kamar');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->string('hp_pemesan');
            $table->string('nama_tamu');
            $table->smallInteger('status')->nullable()->default(1);
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
        Schema::dropIfExists('pesanans');
    }
};
