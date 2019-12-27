<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en',50);
            $table->string('name_np',50);
            $table->string('phone_en',100);
            $table->string('phone_np',100);
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
        Schema::drop('imp_phones');
    }
}
