<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 55);
            $table->string('sobrenome', 55)->default('---');
            $table->string('email', 55);
            $table->string('dt_nasc', 55)->default('---');
            $table->string('cpfCnpj', 55);
            $table->string('razao_social', 55)->default('---');
            $table->string('tp_pessoa', 55);
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
        Schema::dropIfExists('pessoas');
    }
};
