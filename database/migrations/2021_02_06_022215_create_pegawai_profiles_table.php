<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabatan');            
            $table->longText('alamat');
            $table->string('no_telp');
            $table->text('photo');            
            $table->integer('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('pegawai_profiles');
    }
}
