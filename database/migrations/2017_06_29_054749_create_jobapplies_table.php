<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobappliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobapplies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',35);
            $table->string('email',35);
            $table->string('phone',35);
            $table->text('message');
            $table->string('category',35);
            $table->string('cvname',35);
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
        Schema::drop('jobapplies');
    }
}
