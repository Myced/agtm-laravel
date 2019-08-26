<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('prefix')->nullable();
            $table->string('name');
            $table->string('country_id');
            $table->string('company_name')->nullable();
            $table->string('year_created')->nullable();
            $table->string('position')->nullable();
            $table->string('company_address')->nullable();
            $table->string('tel_numbers')->nullable();
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('ip_address');
            $table->text('user_agent');
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
        Schema::dropIfExists('user_data');
    }
}
