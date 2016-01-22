<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            // Création de la colonne category_id, positif avec un index
            $table->integer('categorie_id')->unsigned()->index()->nullable();

            // Liaison de la colonne category_id sur la colonne id de la table category
            $table->foreign('categorie_id')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            // Suppresion de la clef étrangère category_id
            $table->dropForeign('categorie_id');

            // Suppresion de la colonne category_id
            $table->dropColumn('categorie_id');
        });
    }
}
