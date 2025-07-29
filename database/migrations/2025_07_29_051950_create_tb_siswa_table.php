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
    Schema::create('tb_siswa', function (Blueprint $table) {
        $table->string('id_siswa', 10)->primary();
        $table->string('nama_siswa', 100);
        $table->bigInteger('nisn');
        $table->string('id_kelas', 10)->nullable(); // placeholder, FK menyusul
        $table->text('alamat_siswa');
        $table->enum('jkel_siswa', ['L', 'P']);
        $table->date('tgl_siswa');
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
        Schema::dropIfExists('tb_siswa');
    }
};
