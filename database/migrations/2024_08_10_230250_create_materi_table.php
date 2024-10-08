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
    Schema::create('materi', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('peserta_id');
        $table->string('title');
        $table->text('description');
        $table->text('embed_link');
        $table->timestamps();

        $table->foreign('peserta_id')->references('id')->on('peserta')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
