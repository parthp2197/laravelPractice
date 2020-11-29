<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orm', function (Blueprint $table) {
            $table->string('orm_id');
            $table->string('orm_fname');
            $table->string('orm_lname');
            $table->string('orm_email');
            $table->string('orm_password');
            $table->enum('orm_gender',['male','female']);
            $table->string('orm_hobbies');
            $table->string('orm_image');
            $table->string('orm_dob');
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
        Schema::dropIfExists('orm');
    }
}
