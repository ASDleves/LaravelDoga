<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->integer('limit');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->timestamps();
        });

        Event::create([
            'date' => '2023-10-10',
            'agency_id' => 1,
            'limit' => 200,
        ]);

        Event::create([
            'date' => '2023-10-25',
            'agency_id' => 2,
            'limit' => 2005,
        ]);
        Event::create([
            'date' => '2023-10-30',
            'agency_id' => 3,
            'limit' => 20055,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
