<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('sname');
            $table->string('slug');
            $table->mediumText('line');
            $table->string('phone_number');
            $table->mediumText('link_register');
            $table->mediumText('email');
            $table->string('cover');
            $table->enum('status',['Enabled','Disabled'])->default('Enabled');
            $table->integer('user_id');
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
        Schema::dropIfExists('members');
    }
}
