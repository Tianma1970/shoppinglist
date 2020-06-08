<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingitems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('shoppinglist_id')->nullable();
            $table->string('name');
            $table->bigInteger('quantity');
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppingitems');
    }
}
