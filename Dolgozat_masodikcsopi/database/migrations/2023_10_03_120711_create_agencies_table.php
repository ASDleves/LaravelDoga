<?php

use App\Models\Agency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('agencies', function (Blueprint $table) {
        $table->id('agency_id');
        $table->string('name');
        $table->string('country');
        $table->string('type');
        $table->timestamps();
    });

        Agency::create([
            'name' => "Proba1",
            'country' => "magyar",
            'type' => "szép",
        ]);

        Agency::create([
            'name' => "Proba2",
            'country' => "orosz",
            'type' => "szebb",
        ]);
        Agency::create([
            'name' => "Proba3",
            'country' => "Kinai",
            'type' => "szebbbb",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
