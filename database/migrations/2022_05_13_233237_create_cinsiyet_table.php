<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinsiyet', function (Blueprint $table) {
            $table->id();
            $table->string('cinsiyet_name');
            $table->timestamps();
        });
        $ekle = DB::table('cinsiyet')->insert([
            'cinsiyet_name' => "Kadın"
        ]);
        $ekle = DB::table('cinsiyet')->insert([
            'cinsiyet_name' => "Erkek"
        ]);
        $ekle = DB::table('cinsiyet')->insert([
            'cinsiyet_name' => "Belirtmek İstemiyor"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinsiyet');
    }
};
