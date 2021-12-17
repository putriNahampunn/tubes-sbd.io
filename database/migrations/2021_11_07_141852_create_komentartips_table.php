<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentartipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentartips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tip_id');
            $table->text('komentar');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('tip_id')->references('id')->on('tips')->onDelete('restrict');
        });
    }
     /*
        CREATE TABLE komentartips(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            user_id INT NOT NULL,
            tip_id INT NOT NULL,
            komentar TEXT NOT NULL,
            user_id FOREIGN KEY (user_id) REFERENCES users(id),
            tip_id FOREIGN KEY (tip_id) REFERENCES tips(id)
        );
    */


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentartips');
    }
}
