<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('invoice_id')->nullable()->constrained()->nullOnDelete();
            $table->decimal('amount', 12, 2);
            $table->string('currency', 3)->default('ARS');
            $table->enum('method', ['transfer','mercadopago','cash','other'])->default('transfer');
            $table->enum('status', ['pending','paid','failed','refunded'])->default('pending')->index();
            $table->string('provider_id')->nullable(); // ID de MercadoPago, etc.
            $table->timestamp('paid_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->index(['client_id','status']);
        });
    }
    public function down(): void { Schema::dropIfExists('payments'); }
};
