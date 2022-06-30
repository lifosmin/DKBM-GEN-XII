<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Email');
            $table->string('NIM');
            $table->string('Jurusan');
            $table->string('nomorWA');
            $table->string('ID_Line')->nullable();
            $table->string('password');
            $table->string('email_verify_id')->nullable();
            $table->string('email_verify_created_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('forgot_password_id')->nullable();
            $table->string('forgot_password_created_at')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
