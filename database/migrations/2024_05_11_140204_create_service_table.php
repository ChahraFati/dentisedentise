<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();  
            $table->string('nom_service');  
            $table->string('prix', 8, 2);  
            $table->foreignId('patients_id')->constrained('patients')->onDelete('cascade');   
            $table->timestamps();
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
