<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->string('avatar',100)->nullable();
            $table->string('phone_first',20)->nullable();
            $table->string('phone_last',20)->nullable();
            $table->string('viber',20)->nullable();
            $table->string('telegram',20)->nullable();
            $table->string('skype',20)->nullable();
            $table->string('whatsapp',20)->nullable();
            $table->integer('many')->nullable();
            $table->text('message_received')->nullable();
            $table->text('message_left')->nullable();

            $table->unique('user_id');
        });
    }



    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
