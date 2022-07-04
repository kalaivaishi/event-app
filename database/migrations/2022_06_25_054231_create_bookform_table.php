<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookform', function (Blueprint $table) {
            $table->id();
            $table->string('seats_selected');
            $table->string('total_member');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('id_proof');
            $table->string('organization_name');
            $table->string('message');
            $table->string('status');
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
        Schema::dropIfExists('bookform');
    }
}
