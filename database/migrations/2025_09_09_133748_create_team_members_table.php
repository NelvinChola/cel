<?php

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
    Schema::create('team_members', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('position');
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->text('bio')->nullable();
        $table->string('photo')->nullable();
        $table->integer('order')->default(0); // For sorting team members
        $table->boolean('is_active')->default(true);
        $table->json('social_links')->nullable(); // Store social media links as JSON
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
