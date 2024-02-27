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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps()->nullable();
            $table->string('name');
            $table->string('bio')->nullable();
            $table->string('picture')->nullable();
            $table->string('banner')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('domain')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

