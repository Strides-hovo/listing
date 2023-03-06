<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
//            $table->foreignId('category_group_id')->nullable()->constrained()->nullOnDelete();
            $table->integer('parent_id')->default(0);

            $table->unique(['parent_id','id']);

        });
    }


    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
