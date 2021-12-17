<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('judul_tips');
            $table->text('langkah_langkah_tips');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

     /*
        CREATE TABLE tips(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            author_id INT FOREIGN_KEY REFERENCES users(id),
            judul_tips VARCHAR(255) NOT NULL,
            langkah_langkah_tips TEXT NOT NULL,
            gambar VARCHAR(255) NOT NULL
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
}
