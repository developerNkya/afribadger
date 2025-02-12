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
         Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the booking
            $table->foreignId('tour_id')->constrained()->onDelete('cascade'); // Foreign key for the tour
            $table->string('name'); // User's name
            $table->string('email'); // User's email
            $table->string('phone'); // User's phone number
            $table->text('request')->nullable(); // User's request (optional)
            $table->enum('preference', ['email', 'whatsapp', 'calls']); // Communication preference
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
