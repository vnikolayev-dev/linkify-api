<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;
use App\Traits\AdditionalFields; // Import der Basisklasse
use App\Migrations\BaseMigration;

return new class extends BaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                        // Primärschlüssel
            $table->string('first_name');        // Vorname
            $table->string('last_name');         // Nachname
            $table->string('email')->unique();   // Eindeutige E-Mail
            $table->string('password');          // Passwort (hashed)
            $table->string('street')->nullable(); // Straße
            $table->string('postal_code', 10)->nullable(); // Postleitzahl
            $table->string('city')->nullable();  // Stadt
            $this->addStandardFields($table);    // Zusätzliche Standardfelder
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Tabelle löschen
    }
};