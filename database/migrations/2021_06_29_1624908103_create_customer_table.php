<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {

		$table->tinyInteger('id',4)->nullable()->default('NULL');
		$table->string('name',38)->nullable()->default('NULL');
		$table->string('phone',17)->nullable()->default('NULL');
        $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}