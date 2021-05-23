<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('user_id');
            $table->id();
            $table->string('address');
            $table->enum(
                'status',
                ['fullfilled', 'unfullfilled', 'canceled']
            )->default("unfullfilled");
            $table->float('price', 8, 2);
            $table->timestamps();
        });
        Schema::create('orders_products', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('product_id');
            $table->primary(['order_id', 'product_id']);
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('collection_id')->nullable();

            $table->string('name');
            $table->text('description');
            $table->multiLineString('images')->nullable();
            $table->string('brand');
            $table->float('price', 8, 2);

            $table->integer('available');
            $table->boolean('is_published');
            $table->boolean('is_featured');

            $table->timestamps();
        });

        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->boolean('is_featured');
            $table->timestamps();
        });

        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('url');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('collections');
        Schema::dropIfExists('banners');
    }
}
