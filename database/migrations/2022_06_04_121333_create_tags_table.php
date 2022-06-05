<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('slug',100)->nullable();
            $table->timestamps();
        });
        Schema::create('tag_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('tag_id')->constrained();
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
        Schema::table('tag_product',function(Blueprint $table){
            $table->dropForeign(['product_id']);
            $table->dropForeign(['tag_id']);
        });
        Schema::dropIfExists('tag_product');
        Schema::dropIfExists('tags');
    }
}
