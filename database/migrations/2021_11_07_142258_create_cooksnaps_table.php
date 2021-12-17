<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooksnapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooksnaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('recipe_id');
            $table->string('gambar');
            $table->text('komentar');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('restrict');
        });
    }

       /*
        CREATE TABLE cooksnaps(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            user_id INT NOT NULL,
            recipe_id INT NOT NULL,
            gambar VARCHAR(255) NOT NULL,
            komentar TEXT NOT NULL,
            user_id FOREIGN KEY (user_id) REFERENCES users(id),
            recipe_id FOREIGN KEY (recipe_id) REFERENCES recipes(id)
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cooksnaps');
    }
}
