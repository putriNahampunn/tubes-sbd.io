<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('restrict');
            $table->text('pesan');
            $table->timestamps();
        });
    }

     /*
        CREATE TABLE aktivitas(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            author_id INT FOREIGN_KEY REFERENCES admins(id),
            pesan TEXT NOT NULL
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivitas');
    }
}
