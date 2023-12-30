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
            $table->string('payment_image')->nullable();
            $table->integer('duration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('basic_class_user', function (Blueprint $table) {
            $table->dropColumn('payment_image');
            $table->dropColumn('duration');
        });
    }
};
