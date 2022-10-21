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
        Schema::table('inscription', function (Blueprint $table) {
            $table->renameColumn('name','nom');
            $table->renameColumn('mail','email');
            $table->renameColumn('phone','numero');
            $table->renameColumn('formation','formation_a');
            $table->string('statut');
            $table->string('formation_b');
            $table->string('formation_c');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('niveau');
            $table->string('profession');
            $table->string('maladies');
            $table->string('urgence');
            $table->string('paiement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
