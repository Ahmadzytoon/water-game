<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phoneNumber');
            $table->string('email');
        
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('activity_id')->constrained('activity_id')->onDelete('cascade');

            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('activity_id')->references('id')->on('activities')->cascadeOnDelete();
            $table->string('status')->default('pending');
            $table->integer('number_of_guest');
            $table->dateTime('res_date');
            $table->decimal('price');
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
};
