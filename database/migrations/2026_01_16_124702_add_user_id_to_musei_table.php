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
        Schema::table('musei', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('musei', function (Blueprint $table) {
            $table->dropForeign(["user_id"]);  //Il metodo dropForeing si aspetta un Array non una stringa singola xk sto passando il  nome della colonna
            $table->dropColumn("user_id");
            });
    }
};
