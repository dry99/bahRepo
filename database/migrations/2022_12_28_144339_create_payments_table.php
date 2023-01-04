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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 13)->nullable()->comment = "Unique ID (For Each payment)";
            $table->foreignId('facture_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->double('amount', 10, 2)->nullable()->default(0.00);
            $table->double('fee', 10, 2)->nullable()->default(0.00);
            $table->double('total', 10, 2)->nullable()->default(0.00);
            $table->text('note')->nullable();
            $table->enum('status', ['Pending', 'Success','Refund','Blocked']);
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
        Schema::dropIfExists('payments');
    }
};
