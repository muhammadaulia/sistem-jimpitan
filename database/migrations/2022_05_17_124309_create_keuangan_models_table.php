<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuanganModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangan_models', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->integer('minggu1');
            $table->integer('minggu2');
            $table->integer('minggu3');
            $table->integer('minggu4');
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
        Schema::dropIfExists('keuangan_models');
    }
}
