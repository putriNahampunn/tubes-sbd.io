<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfolombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infolombas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('restrict');
            $table->string('gambar')->nullable();
            $table->string('judul_lomba');
            $table->text('deskripsi_lomba');
            $table->text('excerpt');
            $table->timestamps();
        });
    }

    /*
        CREATE TABLE infolombas(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            author_id INT FOREIGN_KEY REFERENCES admins(id),
            gambar VARCHAR(255) NOT NULL
            judul_lomba VARCHAR(255) NOT NULL,
            deskripsi_lomba TEXT NOT NULL,
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infolombas');
    }
}
