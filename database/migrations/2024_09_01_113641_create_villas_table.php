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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('hasParking');
            $table->boolean('hasPool');
            $table->boolean('hasInstallmentPlan');
            $table->boolean('hasManagementCompany');
            $table->tinyInteger('numberOfToilets');
            $table->tinyInteger('numberOfBathrooms');
            $table->tinyInteger('numberOfFloors');
            $table->tinyInteger('numberOfBedrooms');
            $table->foreignIdFor(\App\Models\Country::class);
            $table->foreignIdFor(\App\Models\City::class);
            $table->foreignIdFor(\App\Models\Area::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
