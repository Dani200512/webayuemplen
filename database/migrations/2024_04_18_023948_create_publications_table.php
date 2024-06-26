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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('publication_type');
            $table->string('content')->nullable();
            $table->text('description');
            $table->integer('number_likes')->default(0);
            $table->integer('number_comments')->default(0);
            $table->unsignedBiginteger('profile_id')->unique()->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('set null');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
