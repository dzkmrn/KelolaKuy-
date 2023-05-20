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
        Schema::create('peminjam', function (Blueprint $table) {
            $table->bigInteger('nim')->index()->primary();
            $table->string('nama_peminjam', 100)->index();
            $table->string('jenis_kelamin', 50)->index();
            $table->string('prodi', 100)->index();
            $table->string('kelas', 20)->index();
            $table->string('no_handphone', 20)->index()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjam');
    }
};
