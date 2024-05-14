<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->date('date');
         
            $table->integer('numero_facture')->nullable(); 
             $table->foreignId('patients_id')->constrained('patients');
            $table->foreignId('dentise_id')->constrained('dentise');  
            $table->foreignId('service_id')->constrained('service');  
              $table->timestamps();

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
