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
        Schema::create('customer_source', function (Blueprint $table) {
            $table->id();
            $table->string('customerSource');
            $table->timestamps();
        });
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "İnstagram"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Facebook"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Twitter"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Youtube"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Google"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Tavsiye"
        ]);
        $ekle = DB::table('customer_source')->insert([
            'customerSource' => "Diğer"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_source');
    }
};
