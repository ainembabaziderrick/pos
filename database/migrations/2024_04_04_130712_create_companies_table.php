<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('Logic Business Solutions');
            $table->string('company_address')->default('Bukoto');
            $table->string('company_phone')->default('+256 703996251');
            $table->string('company_email')->default('ceoainembabaziderrick@gmail.com');
            $table->string('company_fax')->default('0776322439');
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
        Schema::dropIfExists('companies');
    }
}
