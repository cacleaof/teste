<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->date('data_nasc');
            $table->string('sexo');
            $table->string('fone');
            $table->string('Municipio');
            $table->string('cpf', 11)->unique();
            $table->string('cns', 7)->unique();
            $table->string('cbo', 6);
            $table->string('ine', 10);
            $table->string('tprof', 2)
            $table->string('email')->unique();
            $table->string('email_alter');
            $table->string('image', 100)->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
