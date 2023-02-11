<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws', function (Blueprint $table) {
            $table->id();
            $table->string('title_ad')->nullable();
            $table->string('info_ad')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone', 11)->nullable();
            $table->date('date_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws');
    }
}
