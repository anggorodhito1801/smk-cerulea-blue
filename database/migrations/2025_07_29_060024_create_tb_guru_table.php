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
    Schema::create('tb_guru', function (Blueprint $table) {
        $table->string('id_guru', 10)->primary();
        $table->string('nama_guru', 100);
        $table->bigInteger('nip');
        $table->string('email', 100);
        $table->string('no_hp', 15);
        $table->string('mapel_ampu', 100);
        $table->enum('jkel_guru', ['L', 'P']);
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
        Schema::dropIfExists('tb_guru');
    }
};
