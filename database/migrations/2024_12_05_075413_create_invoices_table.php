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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('product')->nullable();
            $table->string('section')->nullable();
            $table->string('discount')->nullable();
            $table->string('rate_vat')->nullable();
            $table->decimal('total',8,2)->nullable();
            $table->decimal('value_vat',8,2)->nullable();
            $table->string('status')->nullable();
            $table->integer('value_status')->nullable();
            $table->text('nots')->nullable();
            $table->string('user')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
