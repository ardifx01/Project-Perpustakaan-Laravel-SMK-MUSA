<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string("id_buku");
            $table->string("no_buku")->unique();
            $table->string("nama_buku");
            $table->string("jenis_buku");
            $table->text("foto_buku");
            $table->timestamps();  

            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
