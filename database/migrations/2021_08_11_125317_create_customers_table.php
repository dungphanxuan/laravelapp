<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->smallInteger('age')->nullable();
            $table->smallInteger('address')->nullable();
            $table->smallInteger('card_no')->nullable();
            $table->smallInteger('image_base_url')->nullable();
            $table->smallInteger('image_base_path')->nullable();
            $table->tinyInteger('gender')->nullable()->default(1);
            $table->tinyInteger('status')->nullable()->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
