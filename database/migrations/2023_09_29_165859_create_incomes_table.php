<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->double('sum');
            $table->integer('currency');
            $table->integer('status')->default(1);
            $table->text('short_info')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('client_id')->nullable();
            $table->index('client_id', 'income_client_idx');
            $table->foreign('client_id', 'income_client_fk')->on('clients')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
