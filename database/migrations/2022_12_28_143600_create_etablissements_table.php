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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->integer('rating');
            $table->string('phone1', 20)->unique();
            $table->string('phone2', 20)->unique()->nullable()->default(null);
            $table->boolean('groupe')->nullable();
            $table->string('groupe_name')->nullable();
            $table->boolean('channel_manager')->nullable();
            $table->string('channel_manager_name')->nullable();
            $table->string('address');
            $table->foreignId('citie_id');
            // $table->foreignId('city_id')->constrained();
            $table->foreignId('etablissement_type_id')->constrained();
            $table->string('code_postal');
            // $table->integer('rating');
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
        Schema::dropIfExists('etablissements');
    }
};
