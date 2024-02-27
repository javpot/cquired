<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps()->nullable();
            $table->string('titre');
            $table->string('description');
            $table->string('status')->nullable();
            $table->foreignId('client_id')->constrained('clients');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function ($table) {
            $table->dropForeign(['client_id']);
        });
    }
};
