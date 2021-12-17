<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('gambar')->nullable();
            $table->string('judul_resep');
            $table->text('deskripsi_resep');
            $table->text('excerpt');
            $table->string('porsi')->nullable();
            $table->string('lama_memasak')->nullable();
            $table->text('bahan_bahan');
            $table->text('langkah_langkah');
            $table->timestamps();
        });
    }

    /*
        CREATE TABLE recipes(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            author_id INT FOREIGN_KEY REFERENCES users(id),
            gambar VARCHAR(255) NOT NULL,
            judul_resep VARCHAR(255) NOT NULL,
            deskripsi_resep TEXT NOT NULL,
            porsi VARCHAR(255) NOT NULL,
            lama_memasak VARCHAR(255) NOT NULL,
            bahan_bahan TEXT NOT NULL,
            langkah_langkah TEXT NOT NULL
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
