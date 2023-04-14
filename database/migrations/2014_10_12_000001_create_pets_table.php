<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->enum('breed',['Boxer','Buldog','Labrador','Caniche']);
            $table->enum('gender',['Mascle','Femella']);
            $table->string('color');
            $table->integer('edat');
            $table->string('ownerName');
            $table->string('phoneNumber');
            $table->string('picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
