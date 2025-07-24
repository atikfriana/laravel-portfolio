<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanTable extends Migration
{
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('jurusan');
            $table->string('sekolah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendidikan');
    }
}
