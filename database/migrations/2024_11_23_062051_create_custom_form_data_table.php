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
        Schema::create('custom_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('form_type')->default('general'); // Identifies the type of form (e.g., contact, feedback)
            $table->string('name'); // For the user's name
            $table->string('email'); // For the user's email
            $table->string('mobile', 15); // For the user's mobile number, with max 15 digits
            $table->string('company')->nullable(); // For the company name, optional
            $table->text('message')->nullable(); // For the user's message, optional
            $table->json('custom_fields')->nullable(); // Stores dynamic custom field data in JSON format
            $table->string('ip_address', 45)->nullable(); // Stores the user's IP address (supports IPv4 and IPv6)
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_form_data');
    }
};
