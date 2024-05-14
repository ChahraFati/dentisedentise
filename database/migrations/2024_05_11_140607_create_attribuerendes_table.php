<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        Schema::table('rendes', function (Blueprint $table) {
             
            $table->string('nom_service')->nullable();
            $table->float('prix')->nullable();
            $table->string('age');
            $table->string('sexe');
            $table->string('nomcomplet')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tele')->nullable();
            $table->string('nomco')->nullable();
            $table->string('numero_assurance');
            $table->string('email');
            $table->string('specialite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rendes', function (Blueprint $table) {
            // Drop columns
            $table->dropColumn('nom_service');
            $table->dropColumn('prix');
            $table->dropColumn('age');
            $table->dropColumn('sexe');
            $table->dropColumn('nomcomplet');
            $table->dropColumn('adresse');
            $table->dropColumn('tele');
            $table->dropColumn('nomco');
            $table->dropColumn('numero_assurance');
            $table->dropColumn('email');
            $table->dropColumn('specialite');
        });
    }
};
