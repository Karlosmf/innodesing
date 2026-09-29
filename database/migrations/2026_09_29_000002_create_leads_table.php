<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('email')->index();
            $table->string('phone')->nullable();
            $table->text('message');
            $table->string('source')->default('web'); // web, whatsapp, referral
            $table->enum('status', ['new','contacted','qualified','converted','spam','archived'])->default('new')->index();
            $table->string('ip')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
            $table->index(['status','created_at']);
        });
    }
    public function down(): void { Schema::dropIfExists('leads'); }
};
