<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait AdditionalFields
{
    public function addAdditionalFields(Blueprint $table)
    {
        $table->boolean('is_active')->default(true);       // Aktiv-Status
        $table->unsignedBigInteger('created_by')->nullable(); // Ersteller (Benutzer-ID)
        $table->unsignedBigInteger('updated_by')->nullable(); // Aktualisierer (Benutzer-ID)
        $table->timestamps();                               // Zeitstempel: created_at, updated_at
    }
}
