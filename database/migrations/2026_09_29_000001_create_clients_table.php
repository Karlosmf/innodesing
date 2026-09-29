<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->index();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('cuit')->nullable();
            $table->text('address')->nullable();
            $table->enum('status', ['lead','active','inactive','archived'])->default('lead')->index();
            $table->text('notes')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // admin que lo creó
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('clients'); }
};
