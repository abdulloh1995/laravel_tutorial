<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_types', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('income_id');
            $table->unsignedBigInteger('type_id');

            $table->index('income_id', 'income_type_inc_idx');
            $table->index('type_id', 'income_type_type_idx');

            $table->foreign('income_id', 'income_type_inc_fk')->on('incomes')->references('id');
            $table->foreign('type_id', 'income_type_type_fk')->on('types')->references('id');

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
        Schema::dropIfExists('income_types');
    }
}
