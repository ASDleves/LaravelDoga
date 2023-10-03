<?php
use App\Models\User;
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
    Schema::create('users', function (Blueprint $table) {
        $table->id('user_id');
        $table->string('name', 32)->unique();
        $table->string('email',32)->unique();
        $table->boolean('vip')->default(0);
        $table->timestamps();
    });

        User::create([
            'name' => "Béla", 
            'email' => 'valaki@gmail.com', 
            'vip' => true
        ]);

        User::create([
            'name' => "Igen2", 
            'email' => 'valami@gmail.com', 
            'vip' => true
        ]);
        User::create([
            'name' => "Igen3", 
            'email' => 'valami_!_fsa@gmail.com', 
            'vip' => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
