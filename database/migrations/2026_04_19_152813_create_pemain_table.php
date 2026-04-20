<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pemain', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi');
            $table->integer('no_punggung');
            $table->string('negara');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemain');
    }
};
