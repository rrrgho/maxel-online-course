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
        Schema::table('class_users', function (Blueprint $table) {
            $table->string('payment_image')->nullable();
            $table->string('status')->default('WAITING'); // WAITING | APPROVED | REJECTED | EXPIRED
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('class_users', function (Blueprint $table) {
            $table->dropColumn('payment_image');
            $table->dropColumn('status');
        });
    }
};
