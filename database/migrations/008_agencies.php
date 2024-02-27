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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->timestamps()->nullable();
            $table->string('name')->nullable();
            $table->string('bio')->nullable();
            $table->string('email');
            $table->string('pwd')->nullable();
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->string('picture')->nullable();
            $table->string('banner')->nullable();
            $table->string('domain')->nullable();
            $table->foreignId('agencie_id')->constrained('subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
