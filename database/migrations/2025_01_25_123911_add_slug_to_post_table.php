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
        Schema::table('post', function (Blueprint $table) {
            // Añadir una columna slug a la tabla post
            $table -> string('slug')->nullable()->after('title'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post', function (Blueprint $table) {
            // Eliminar la columna slug de la tabla post
            $table -> dropColumn('slug');
        });
    }
};
