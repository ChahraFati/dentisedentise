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
        Schema::table('factures', function (Blueprint $table) {
             
            $table->string('servicename')->nullable();
            $table->float('prix')->nullable();

            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('tele')->nullable();
            $table->string('nomco')->nullable();
            

             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('factures', function (Blueprint $table) {
             
            // Drop columns
            $table->dropColumn('nom_service');
            $table->dropColumn('prix');
            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->dropColumn('tele');
            $table->dropColumn('nomco');
             

             

            // Dropping the table itself
            Schema::dropIfExists('factures');
        });
    }
};
