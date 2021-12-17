<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*
        CREATE TABLE admins(
            id INT AUTO_INCREMENT PRIMARY_KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            email_verified_at TIMESTAMP,
            password VARCHAR(255) NOT NULL,
            remember_token VARCHAR(100)
        );
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
