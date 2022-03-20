<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinyaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minyaks', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_minyak', ['minyak_goreng','minyak_tanah']);
            $table->string('merk', 50);
            $table->integer('qty');
            $table->enum('kondisi',['layak_pakai','rusak_ringan','rusak_berat']);
            $table->date('tanggal_beli');
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
        Schema::dropIfExists('minyaks');
    }
}
