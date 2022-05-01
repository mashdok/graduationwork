<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku_masters', function (Blueprint $table) {
            $table->bigIncrements('sku_id');
            $table->string('sku_name');
            $table->string('sku_subcategory');
            $table->string('sku_desc');
            $table->integer('distributor_id');//業者に対して1対多のリレーション
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
        Schema::dropIfExists('sku_masters');
    }
};
