<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__statuses', function (Blueprint $table) {
            $table->increments('status_id');
            $table->string('status_title','255');
            $table->string('status_description','255');
            $table->string('satus','20')->default('1');
            $table->string('satus_author','255');
            $table->string('status_sort','255');
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
        Schema::dropIfExists('tbl__statuses');
    }
}
