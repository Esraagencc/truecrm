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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('clinic_id');
            $table->string('name_surname');
            $table->string('phone');
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->text('before_surgery')->nullable();
            $table->text('ill')->nullable();
            $table->text('notes')->nullable();
            $table->string('source');
            $table->integer('branch_id')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
