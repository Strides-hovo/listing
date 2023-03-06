<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fid',50);
            $table->foreignId('template_group_id')->constrained();
        });
    }



    public function down()
    {
        Schema::dropIfExists('templates');
    }
};
