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
    Schema::table('pendidikan', function (Blueprint $table) {
        $table->string('gambar')->nullable(); // Tambahkan kolom gambar
    });
}

public function down()
{
    Schema::table('pendidikan', function (Blueprint $table) {
        $table->dropColumn('gambar');
    });
}

};
