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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('hiring_date');
            $table->float('salary', 10);
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
        Schema::dropIfExists('employees');
    }
};
