<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('foto_kegiatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeries');
    }
}
