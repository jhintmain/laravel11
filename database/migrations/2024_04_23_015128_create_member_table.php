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
        // artisan migrate
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 50);
            $table->string('email', length: 100)->unique();
            $table->string('address', length: 120);
            $table->char('status', length: 1)->default('A');
            $table->timestamps();   // create_at, update_at
            $table->softDeletes();  // delete_at

            $table->index(['name']);
            $table->index(['status']);
            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // artisan migrate:rollback --path=/database/migrations/2024_04_23_015128_create_member_table.php
        Schema::dropIfExists('member');
    }
};
