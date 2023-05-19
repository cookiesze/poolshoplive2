<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * Indoor / Outdoor
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('product_code');
            $table->string('barcode');
            $table->mediumText('dimension');
            $table->mediumText('made');
            $table->enum('use',['Indoor','Outdoor'])->default('Indoor');
            $table->mediumText('small_description');
            $table->longText('description');
            $table->string('image');
            $table->string('image_dimension');
            $table->enum('status',['Enabled','Disabled'])->default('Enabled');
            $table->mediumText('meta_title');
            $table->mediumText('meta_description');
            $table->timestamps();
            $table->integer('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
