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
        Schema::create('cus_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('CusAcc_No',13);
            $table->decimal('CusAcc_Balance',10,2);
            $table->string('CusAcc_Status',20);
            $table->string('CusAcc_InstallmentStatus',20);
            $table->string('CusAcc_Remark',150);
            $table->unsignedBigInteger('Cus_id');
            $table->foreign('Cus_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('Org_id');
            $table->foreign('Org_id')->references('id')->on('organization_details');
           
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
        Schema::dropIfExists('cus_accounts');
    }
};
