<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('aktivitas_id');
            $table->text('komentar');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('aktivitas_id')->references('id')->on('aktivitas')->onDelete('restrict');
        });
    }

     /*
        CREATE TABLE komentars(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            user_id INT FOREIGN_KEY REFERENCES users(id),
            aktivitas_id INT FOREIGN_KEY REFERENCES aktivitas(id),
            komentar TEXT NOT NULL
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentars');
    }
}
