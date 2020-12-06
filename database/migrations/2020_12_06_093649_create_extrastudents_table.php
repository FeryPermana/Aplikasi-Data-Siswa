<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrastudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrastudents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_students')->unsigned();
            $table->bigInteger('id_extra')->unsigned();
            $table->timestamps();
            $table->foreign('id_students', 'id_extra')->references('id')->on('students', 'extras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrastudents');
    }
}
