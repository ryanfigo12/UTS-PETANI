<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panens', function (Blueprint $table) {
            $table->id('panenID');
            $table->foreignId('productID');
            $table->foreignId('id_kelompok_tani');
            $table->foreignId('user_id');
            $table->date('perkiraanPanendate');
            $table->double('perkiraanPanenjumlah');
            $table->date('PanenDate');
            $table->double('PanenJumlah');
            $table->string('satuan');
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
        Schema::dropIfExists('panens');
    }
}
