<?php

namespace App\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

abstract class BaseMigration extends Migration
{
    public function addStandardFields(Blueprint $table)
    {
        $table->boolean('is_active')->default(true);       // Aktiv-Status
        $table->unsignedBigInteger('created_by')->nullable(); // Ersteller (Benutzer-ID)
        $table->unsignedBigInteger('updated_by')->nullable(); // Aktualisierer (Benutzer-ID)
        $table->timestamps();                               // Zeitstempel: created_at, updated_at
    }
}
