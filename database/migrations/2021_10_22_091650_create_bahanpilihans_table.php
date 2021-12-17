<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanpilihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanpilihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('restrict');
            $table->string('gambar')->nullable();
            $table->string('judul_bahanpilihan');
            $table->text('deskripsi_bahanpilihan');
            $table->text('excerpt');
            $table->timestamps();
        });
    }

    /*
        CREATE TABLE bahanpilihans(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            author_id INT FOREIGN_KEY REFERENCES admins(id),
            gambar VARCHAR(255) NOT NULL,
            judul_bahanpilihan VARCHAR(255) NOT NULL,
            deskripsi_bahanpilihan TEXT NOT NULL
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bahanpilihans');
    }
}
