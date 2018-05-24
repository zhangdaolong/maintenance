<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->float('amount');
            $table->text('description', 65535)->nullable();
            $table->dateTime('invoiced_date')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->integer('status_id')->unsigned()->index('work_orders_status_id_foreign');
            $table->integer('customer_id')->unsigned()->nullable()->index('work_orders_customer_id_foreign');
            $table->integer('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoices');
    }
}
