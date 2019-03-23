<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newtables', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* $table->datatype('COLUMN NAME',SIZE)*/
            
            $table->string('File_Name',50);
            $table->string('Location',200);
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
        Schema::dropIfExists('newtables');
    }
}
