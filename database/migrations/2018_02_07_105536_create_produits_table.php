<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
        	/* increments() signifie que nous créons un champ ID en auto increment */
            $table->increments('id');

            /* string equivaut au VARCHAR. Le 2eme argument est la longueur de caractere */
            /* nullable() veut dire que l'on permet le champ null */
            $table->string('titre', 25)->nullable();
            $table->string('reference', 25)->unique();
            $table->string('slug', 50)->nullable();
            $table->string('photo', 50)->nullable();
            $table->float('prix', 7,2)->nullable();
            $table->integer('quantite')->nullable();
            $table->text('description')->nullable();

            /* timestamps() va creer 2 champs : created_at et updated_at */
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
        Schema::dropIfExists('produits');
    }
}
