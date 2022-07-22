<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('sex')->nullable();
            $table->unsignedTinyInteger('date_of_birth')->nullable();
            $table->string('phone')->unique();
            $table->tinyInteger('blood_group')->nullable();
            $table->string('gardian')->nullable();
            $table->string('gardian_phone_number')->unique()->nullable();
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->text('address');
            $table->unsignedTinyInteger('profile_status')->default(0)->comment('0 = Pending | 1 = Approval');
            $table->string('ip_address')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('division_id')
                  ->references('id')->on('divisions')
                  ->onDelete('cascade');
                  
            $table->foreign('district_id')
                  ->references('id')->on('districts')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
