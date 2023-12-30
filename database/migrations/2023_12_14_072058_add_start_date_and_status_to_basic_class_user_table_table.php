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
        Schema::table('basic_class_user', function (Blueprint $table) {
            $table->date('start_date')->nullable();
            $table->string('status')->default('WAITING'); // WAITING | APPROVED | REJECTED | EXPIRED
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('basic_class_user', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('status');
        });
    }
};
