<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderablecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderablecourses', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('heading');
            $table->Text('description')->nullable();
            $table->float('price');
            $table->integer('rating')->default(0);
            $table->string('thumbnail')->default('images/default/orderablecourses.png');
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
        Schema::dropIfExists('orderablecourses');
    }
}
