<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_cycles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merk_id')->constrained('merks')->cascadeOnDelete();
            $table->string('name');
            $table->string('color');
            $table->integer('cc');
            $table->enum('status', ['New', 'Second']);
            $table->bigInteger('km');
            $table->decimal('price', 11, 2);
            $table->text('body')->nullable();
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
        Schema::dropIfExists('motor_cycles');
    }
}
