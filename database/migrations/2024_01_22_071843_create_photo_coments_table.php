<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoComentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_coments', function (Blueprint $table) {
            $table->BigIncrements('KomentarID');
            $table->UnsignedBigInteger('FotoID');
            $table->foreign('FotoID')->references('FotoID')->on('photos')->onDelete('cascade');
            $table->UnsignedBigInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->text('IsiKomentar');
            $table->date('TanggalKomentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_coments');
    }
}
