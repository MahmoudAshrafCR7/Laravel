<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{

    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string("name_en");
            $table->string("name_ar");
            $table->string("descripton_en");
            $table->string("descripton_ar");
            $table->enum('status',["0","1"])->default("0");
            $table->string("sec_image");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
