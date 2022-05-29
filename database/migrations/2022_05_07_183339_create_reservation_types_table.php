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
        Schema::create('reservation_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $ekle = DB::table('reservation_types')->insert([
            'name' => "Muayene"
        ]);
        $ekle = DB::table('reservation_types')->insert([
            'name' => "Ameliyat"
        ]);
        $ekle = DB::table('reservation_types')->insert([
            'name' => "Diğer    "
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_types');
    }
};
