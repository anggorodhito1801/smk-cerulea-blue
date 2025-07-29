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
    Schema::create('tb_kelas', function (Blueprint $table) {
        $table->string('id_kelas', 10)->primary();
        $table->string('nama_kelas', 100);
        $table->enum('tingkat_kelas', ['Kelas 10', 'Kelas 11', 'Kelas 12']);
        $table->string('jurusan', 100);
        $table->string('wali_kelas', 10); // Foreign Key dari tb_guru
        $table->timestamps();

        $table->foreign('wali_kelas')->references('id_guru')->on('tb_guru')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('tb_kelas');
    }
};
