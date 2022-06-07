<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover')->nullable();
            $table->string('cover1')->nullable();
            $table->string('cover2')->nullable();
            $table->string('cover3')->nullable();
            $table->string('cover4')->nullable();
            $table->string('cover5')->nullable();
            $table->string('cover6')->nullable();
            $table->string('cover7')->nullable();
            $table->string('cover8')->nullable();
            $table->string('cover9')->nullable();
            $table->text('desc');
            $table->text('shortDesc')->nullable();
            $table->integer('price');
            $table->integer('discount')->default(1);
            $table->integer('sale')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
