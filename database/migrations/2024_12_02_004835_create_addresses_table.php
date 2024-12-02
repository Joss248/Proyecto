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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->string('street',50)->nullable()->default('arista');
            $table->integer('internal_num')->unsigned()->nullable()->default(5);
            $table->integer('external_num')->unsigned()->nullable()->default(5);
            $table->string('neighborhood',50)->nullable()->default('Revolucion');
            $table->string('town', 40)->nullable()->default('Gtz. Zamora');
            $table->string('state', 40)->nullable()->default('Veracruz');
            $table->string('country', 40)->nullable()->default('Mexico');
            $table->integer('postal_code')->unsigned()->nullable()->default(93558);
            $table->string('references', 100)->nullable()->default('');
           
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade') ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
