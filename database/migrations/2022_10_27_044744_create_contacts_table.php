<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('address');
            $table->string('phone');
            $table->mediumText('email');
            $table->mediumText('map');
            $table->longText('description');
            $table->mediumText('facebook');
            $table->mediumText('shopee');
            $table->mediumText('lazada');
            $table->enum('status',['Enabled','Disabled'])->default('Enabled');
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
        Schema::dropIfExists('contacts');
    }
}
